<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function testPrimeNu(){
            let n = document.input.number.value;
            if(n==0){
                return "Please input positive number and without 0";
            } else if(n==1){
                return "1 is not a prime number";
            } else if(n==2){
                return "2 is a prime number";
            } else {
                for (i=2; i<n; i++){
                    if(n%i==0){
                        return n + " is not a prime number";
                    }
                }
                return n + " is a prime number";
            }
        }

    </script>
    
    <h1>Test Prime or Factorial Numbers</h1>
    <form action="" name="input" onsubmit="alert(testPrimeNu())">
        <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>