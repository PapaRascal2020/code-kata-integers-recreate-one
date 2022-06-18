# code-kata-integers-recreate-one
Codewars Kata: Find all integers between m and n (m and n integers with 1 &lt;= m &lt;= n) such that the sum of their squared divisors is itself a square. 

# Task

Find all integers between m and n (m and n integers with 1 <= m <= n) such that the sum of their squared divisors is itself a square.

We will return an array of subarrays or of tuples (in C an array of Pair) or a string. The subarrays (or tuples or Pairs) will have two elements: first the number the squared divisors of which is a square and then the sum of the squared divisors.

# For Codewars

This is what I had to put in, the code for my PHP Unit project was slightly different.

<pre>
function listSquared($m, $n) : array
{
    $divisors = [];
    for ($i = $m; $i <= $n; $i++) {
        $squaredNumber = getDivisorSquared($i);

        if (isSquareNumber($squaredNumber)) {
            $divisors[] = [$i, $squaredNumber];
        }
    }

    return $divisors;
}

function isSquareNumber($number) : bool
{
    return sqrt($number) == floor(sqrt($number));
}

function getDivisorSquared($number) : int
{
    $result = 0;

    for($i = 1; $i <= round(sqrt($number)); $i++){
        if($number % $i === 0){
            $result += $i ** 2;
            $ii = $number / $i;
            if ($i !== $ii) {
                $result += $ii ** 2;
            }
        }
    }

    return $result;
}
</pre>