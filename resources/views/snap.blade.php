<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}">
  </script>
</head>

<body>
  <button id="pay-button">Pay!</button>

  <script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      window.snap.pay('{{ $snapToken }}', {
        onSuccess: function(result) {
          console.log('Payment Success:', result);
          alert("Pembayaran berhasil!");
          window.location.href = "/"; // Redirect ke homepage
        },
        onPending: function(result) {
          console.log('Payment Pending:', result);
          alert("Pembayaran masih pending.");
          window.location.href = "/"; // Redirect juga bisa di sini jika perlu
        },
        onError: function(result) {
          console.log('Payment Failed:', result);
          alert("Pembayaran gagal!");
          // Tidak redirect otomatis di sini
        },
        onClose: function() {
          alert("Anda menutup jendela pembayaran.");
        }
      });
    });
  </script>
</body>
</html>
