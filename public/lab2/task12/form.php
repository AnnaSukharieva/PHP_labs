<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript">
    function checkGuess() {
      const guess = document.getElementById("guess").value;
      const formData = new FormData();
      formData.append('guess', guess);

      fetch('handler.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(data => {
          alert(data);
          document.getElementById("guessForm").reset();
        })
        .catch(error => console.error('Error:', error));
    }
  </script>

</head>

<body>
  <form id="guessForm">
    Спробуйте вгадати число (від 1 до 10): <input type="text" id="guess" required>
    <button type="button" onclick="checkGuess()">Перевірка!</button>
  </form>
</body>

</html>