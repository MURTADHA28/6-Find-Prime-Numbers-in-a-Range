function checkPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($divisor = 2; $divisor <= sqrt($num); $divisor++) {
        if ($num % $divisor == 0) {
            return false;
        }
    }
    return true;
}

function getPrimesBetween($low, $high) {
    $primeNumbers = array_filter(range($low, $high), 'checkPrime');
    return array_values($primeNumbers);
}

$startRange = 90;
$endRange = 200;
$primeList = getPrimesBetween($startRange, $endRange);
echo implode(', ', $primeList);
