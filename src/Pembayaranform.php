<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Kontak</title>
    <link rel="stylesheet" href="./output.css">
    <style>
      body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
        background-color: #feeec5;
      }

      .containers {
        width: 500px;
        margin: 50px auto 100px; /* top right bottom left */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
      }

      .input-group {
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin-bottom: 5px;
        color: #333;
      }

      input[type="text"],
      input[type="date"],
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        border: none;
      }

      input[type="text"]::placeholder,
      input[type="date"]::placeholder,
      select::placeholder {
        color: #999;
      }

      .button-group {
        text-align: center;
      }

      button {
        padding: 10px 20px;
        background-color: #6f0b0b;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      button:hover {
        background-color: #6f0b0b;
      }

      button:disabled {
        background-color: #ccc;
        cursor: default;
      }

      header {
        padding: 20px;
        background-color: #6f0b0b;
        border-bottom: 1px solid #ccc;
        color: white;
      }

      header h2 {
        margin-bottom: 10px;
      }

      header h3 {
        margin: 0;
        color: white;
        font-weight: bold;
        font-size: 1.2em; /* Make the text larger */
      }

      header h2 {
        font-size: 1.5em; /* Make the text smaller */
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <header>
      <h2>COMPLETE THE DATA BELOW!</h2>
      <h3>To continue the payment process</h3>
    </header>

    <div class="containers">
      <form action="#">
        <div class="input-group">
          <input
            type="text"
            id="nama"
            name="nama"
            placeholder="Name"
            required
          />
        </div>

        <div class="input-group">
          <input
            type="text"
            id="no_telephone"
            name="no_telephone"
            placeholder="Enter your telephone number"
            required
          />
        </div>

        <div class="input-group">
          <input
            type="text"
            id="alamat"
            name="alamat"
            placeholder="Address"
            required
          />
        </div>

        <div class="input-group">
          <select id="paket_sewa" name="paket_sewa" required>
            <option value="" disabled selected>select package</option>
            <option value="paket1">package 1</option>
            <option value="paket2">package 2</option>
            <option value="paket3">package 3</option>
          </select>
        </div>

        <div class="input-group">
          <label for="tanggal_sewa">Rental date</label>
          <input type="date" id="tanggal_sewa" name="tanggal_sewa" required />
        </div>

        <div class="button-group">
          <button type="button">CANCEL</button>
          <button type="submit">NEXT</button>
        </div>
      </form>
    </div>

    <?php include "layout/footer.php" ?>
  </body>
</html>
