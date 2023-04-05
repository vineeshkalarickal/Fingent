<!DOCTYPE html>
<html>

  <head>
    <title>API Throttling</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form id="throttling-form" novalidate method="post" action="../Controller/throttle.php">
            <div class="form-group">
              <label for="throttleLimit">Throttle Limit</label>
              <input type="number" class="form-control" id="throttleLimit" name="throttleLimit"
                placeholder="Enter throttle limit" required>
              <div class="invalid-feedback">Please enter a valid throttle limit.</div>
            </div>
            <div class="form-group">
              <label for="throttleTime">Throttle Time</label>
              <input type="number" class="form-control" id="throttleTime" name="throttleTime"
                placeholder="Enter throttle time" required>
              <div class="invalid-feedback">Please enter a valid throttle time.</div>
            </div>
            <div class="form-group">
              <label for="referrers">Referrers</label>
              <textarea class="form-control" id="referrers" name="referrers" rows="3" placeholder="Enter referrers"
                required></textarea>
              <div class="invalid-feedback">Please enter at least one referrer.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../js/form_validate.js"></script>
  </body>

</html>
