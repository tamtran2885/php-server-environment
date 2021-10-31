<?php 
require_once(__DIR__ . "/../config/app.php");
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: ./index.php");
  exit;
}
?>

<?php
  $toursJsonFile = __DIR__ . "/../data/tours.json";
  // Check if data exist, load data
  if (file_exists($toursJsonFile)) {
    $jsonData = file_get_contents($toursJsonFile);
    $toursData = json_decode($jsonData, true);
  } else {
    // if data does not exist, start with an empty array
    $toursData = [];
  }

  // Create a variable of error
  $formErrors = [];

  // If the request method is POST, then use the submitted data to save new input
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Normalize the request data
    $normalizedData = [
      "destination" => isset($_POST["destination"]) ? (string)$_POST["destination"] : "",
      "number_of_tickets_available" => isset($_POST["number_of_tickets_available"]) ? (int)$_POST["number_of_tickets_available"] : 0,
      "is_accessible" => isset($_POST["is_accessible"]) ? true : false
    ];

    // 2. Validate the request data
    if ($normalizedData["destination"] === "") {
      $formErrors["destination"] = "Please enter a destination";
    }

    if ($normalizedData["number_of_tickets_available"] < 1) {
      $formErrors["number_of_tickets_available"] = "Number of tickets available must be at least 1";
    }

    // 3. Convert data to JSON and save data to file tours.json
    if (count($formErrors) === 0) {
      $toursData[] = $normalizedData;
      $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
      file_put_contents($toursJsonFile, $jsonData);

      // Display message after adding new data successfully
      // $_SESSION["message"] = "Successfully added new tour";
      // header("Location: ");
      // exit;
    }
  }
?>

<?php
  $title = "Panel Page";
  include(__DIR__ . "/../inc/_header.php");
?>

<main class="main">
  <div class="container">
    <h1>Create new tour</h1>
    <form
      method="POST"
    >
      <div class="mb-3">
        <label for="destination" class="form-label">Destination:</label>
        <input type="text" class="form-control" id="destination"  name="destination" value="" >
        <?php
          if(isset($formErrors["destination"])) {
            ?>
              <strong><?php echo $formErrors["destination"]; ?></strong>
            <?php
          }
        ?>
      </div>
      <div class="mb-3">
        <label for="number_of_tickets_available" class="form-label">Number of tickets available:</label>
        <input type="number" class="form-control" id="number_of_tickets_available" value="" name="number_of_tickets_available" >
        <?php
          if(isset($formErrors["number_of_tickets_available"])) {
            ?>
              <strong><?php echo $formErrors["number_of_tickets_available"]; ?></strong>
            <?php
          }
        ?>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="is_accessible" value="yes">
        <label class="form-check-label" for="is_accessible">
          Is accessible
        </label>
      </div>
      <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>

    <h1 class>Display tours</h1>
    <div class="row">
      <div class="col">
        <h3>Destination</h3>
      </div>
      <div class="col-6">
        <h3>Number of tickets available</h3>
      </div>
      <div class="col">
        <h3>Is accessible</h3>
      </div>
    </div>
    <?php
      foreach($toursData as $tourData) {
        ?>
        <div class="row">
          <div class="col">
            <h3><?php echo htmlspecialchars($tourData['destination'], ENT_QUOTES); ?></h3>
          </div>
          <div class="col-6">
            <h3><?php echo htmlspecialchars($tourData['number_of_tickets_available'], ENT_QUOTES); ?></h3>
          </div>
          <div class="col">
            <h3><?php echo $tourData['is_accessible'] ? "Yes" : "No"; ?></h3>
          </div>
        </div>
        <?php
      }
    ?>
  </div>
</main>
<?php
  include(__DIR__ . "/../inc/_footer.php");
?>