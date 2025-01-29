<?php
function convertCurrency($amount, $from, $to) {
    // Kurs statis (contoh)
    $exchangeRates = [
        'IDR' => 1,
        'USD' => 0.000067,
    ];

    if (!isset($exchangeRates[$from]) || !isset($exchangeRates[$to])) {
        return "Error: Mata uang tidak valid.";
    }

    $convertedAmount = ($amount / $exchangeRates[$from]) * $exchangeRates[$to];
    return number_format($convertedAmount, 2);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $from = $_POST['from_currency'];
    $to = $_POST['to_currency'];
    $result = convertCurrency($amount, $from, $to);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .converter-container {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 500px;
        margin: 50px auto;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004080;
    }

    .form-label {
        font-weight: bold;
    }

    .result-box {
        background: #e9f7ef;
        border: 1px solid #28a745;
        border-radius: 8px;
        padding: 15px;
        margin-top: 20px;
        text-align: center;
        font-size: 1.25rem;
        font-weight: bold;
        color: #28a745;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="converter-container">
            <h2 class="text-center mb-4">Currency Converter</h2>
            <form method="POST" action="converter.php">
                <div class="mb-3">
                    <label for="amount" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" name="amount" id="amount" placeholder="Masukkan jumlah"
                        required>
                </div>
                <div class="mb-3">
                    <label for="from_currency" class="form-label">Dari</label>
                    <select class="form-select" name="from_currency" id="from_currency" required>
                        <option value="IDR">Rupiah (IDR)</option>
                        <option value="USD">Dollar (USD)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="to_currency" class="form-label">Ke</label>
                    <select class="form-select" name="to_currency" id="to_currency" required>
                        <option value="USD">Dollar (USD)</option>
                        <option value="IDR">Rupiah (IDR)</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Konversi</button>
            </form>

            <?php if (isset($result)): ?>
            <div class="result-box">
                Hasil: <?= $result; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>