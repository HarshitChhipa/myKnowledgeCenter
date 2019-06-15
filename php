Generates an array, containing the Fibonacci sequence, up until the nth term.

function fibonacci($n)
{
    $sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $sequence[$i] = $sequence[$i-1] + $sequence[$i-2];
    }

    return $sequence;
}

fibonacci(6); // [0, 1, 1, 2, 3, 5]

########################################################################################################3

endsWith

Check if a string is ends with a given substring.

function endsWith($haystack, $needle)
{
    return strrpos($haystack, $needle) === (strlen($haystack) - strlen($needle));
}

endsWith('Hi, this is me', 'me'); // true
