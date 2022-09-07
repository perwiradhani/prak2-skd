<?php
$input = $output = "";
$key = array(
    'a' => '~',
    'A' => '!',
    'b' => 'b',
    'c' => 'c',
    'd' => 'd',
    'e' => '#',
    'E' => '=',
    'f' => 'f',
    'g' => 'g',
    'h' => 'h',
    'i' => '$',
    'I' => '%',
    'j' => 'j',
    'k' => 'k',
    'l' => 'l',
    'm' => 'm',
    'n' => 'n',
    'o' => '+',
    'O' => '*',
    'p' => 'p',
    'q' => 'q',
    'r' => ']',
    's' => 's',
    't' => 't',
    'u' => '^',
    'U' => '_',
    'v' => '-',
    'w' => '&',
    'x' => '@',
    'y' => '[',
    'z' => ')'
);
if(isset($_POST['enc'])){
    $input = $_POST['txt'];
    $output = str_replace(array_keys($key), $key, $input);
} elseif(isset($_POST['dec'])){
    $input = $_POST['txt'];
    $flip = array_flip($key);
    $output = str_replace(array_keys($flip), $flip, $input);
} elseif(isset($_POST['res'])){
    $input = "";
    $output = "";
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    <title>Encryption</title>
</head>
<body class="bg-slate-600">
<div class="flex items-center justify-center p-36 font-mono">
  <div class="bg-slate-800 w-full max-w-xl rounded shadow-2xl">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2 text-white" for="username">Text</label>
            <input class="bg-slate-700 shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="txt" value="<?php echo $input; ?>" />
        </div>
        <div class="mb-4">
            <label class="block text-white text-sm font-bold mb-2 text-white" for="username">Hasil</label>
            <input class="bg-slate-700 shadow appearance-none border rounded w-full py-2 px-3 text-white leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="hasil" value="<?php echo $output; ?>" readonly />
        </div>
            <div class="flex">
                <div class="px-0">
                    <input type="submit" name="enc" class="rounded-xl shadow-xl bg-red-300 hover:bg-red-500 text-slate-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Enrypt">
                    <input type="submit" name="dec" class="rounded-xl shadow-xl bg-blue-300 hover:bg-blue-500 text-slate-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Decrypt">
                    <input type="submit" name="res" class="rounded-xl shadow-xl bg-amber-300 hover:bg-amber-500 text-slate-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Reset">
                </div>
            </div>     
        </form>
    </div>
</div>

</body>
</html>

