<h3>3.1 Open and read file</h3>
<h4>3.1.1 String way</h4>
<p>// set file to read <br>
$file = 'filepath(.txt was in example)'<br>
 or die('Could not open file!');<br>

// open file<br>
//r-read, w-write new file, destroy prevoius, a-opens in append, preserving existing file<br>
$fh = fopen($file, 'r')<br>
 or die('Could not open file!');<br>

 // read file contents<br>

$data = fread($fh, filesize($file))<br>
 or die('Could not read file!');<br>

// close file<br>

fclose($fh);<br>

// print file contents<br>

echo $data;

 </p>
 <h4>3.1.2 Array way</h4>
 <p> 	// set file to read<br>
$file = 'filepath(.txt was in example)'<br>
 or die('Could not read file!');

// read file into array<br>

$data = file($file)<br>
 or die('Could not read file!');<br>

// loop through array and print each line<br>

foreach ($data as $line)<br> 
{<br>

     echo $line;<br>

}
 </p>
 <h4>3.1.3 String way two</h4>
 <p>// set file to read<br>
$file = 'filepath(.txt was in example)' ;

// read file into string<br>

$data = file_get_contents($file)<br>
 or die('Could not read file!');<br>

// print contents<br>

echo $data;
</p>
<h3>3.2 Include() and Require()</h3>
<a href="index3.php">Example</a>
<p>Require = fatal error, end of script.<br>
Include = warning, script continue working<br>
require_once() and include_once(),
ensure that file isn't readed in twise</p>
<h3>3.3 Write to file</h3>
<h4>3.3.1 Way One</h4>
<p>// set file to write<br>
$file = '/tmp/dump.txt';<br>
// open file<br>
$fh = fopen($file, 'w') or die('Could not open file!');<br>
// write to file<br>
fwrite($fh, "Look, Ma, I wrote a file!<br>
") or die('Could not write to file');<br>
// close file<br>
fclose($fh);</p>
<h4>3.3.2 .Way Two</h4>
<p>

// set file to write<br>
$filename = '/tmp/dump.txt';<br>

// write to file<br>

file_put_contents($filename, "Look, Ma, I wrote a file!")<br>
 or die('Could not write to file');
</p>