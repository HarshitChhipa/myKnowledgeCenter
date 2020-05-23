# Run a server in mac to server php pages.
php -S 127.0.0.1:any_port_no

# Generates an array, containing the Fibonacci sequence, up until the nth term.

function fibonacci($n)
{
    $sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $sequence[$i] = $sequence[$i-1] + $sequence[$i-2];
    }

    return $sequence;
}

fibonacci(6); // [0, 1, 1, 2, 3, 5]

endsWith

Check if a string is ends with a given substring.

function endsWith($haystack, $needle)
{
    return strrpos($haystack, $needle) === (strlen($haystack) - strlen($needle));
}

endsWith('Hi, this is me', 'me'); // true

# Without Function.
 
 Filters out the elements of an array, that have one of the specified values.
function without($items, ...$params)
{
    return array_values(array_diff($items, $params));
}

Usage-->
without([2, 1, 2, 3], 1, 2); // [3]
