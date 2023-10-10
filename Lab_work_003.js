function isPrime(num) {
    if (num <= 1) {
        return false;
    }
    for (let i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) {
            return false;
        }
    }
    return true;
}

function checkPrime(num) {
    if (isNaN(num) || num <= 0) {
        return "Please enter a valid positive integer.";
    } else {
        if (isPrime(num)) {
            return num + " is a prime number.";
        } else {
            return num + " is not a prime number.";
        }
    }
}


const numberToCheck = 100;
console.log(checkPrime(numberToCheck));