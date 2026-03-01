$file = 'c:\xampp\htdocs\Go and partners\resources\views\welcome.blade.php'
$content = [System.IO.File]::ReadAllText($file)
$marker = '@endsection'
$idx = $content.IndexOf($marker)
$clean = $content.Substring(0, $idx + $marker.Length)
[System.IO.File]::WriteAllText($file, $clean, [System.Text.Encoding]::UTF8)
Write-Host "Done. File trimmed to first @endsection."
