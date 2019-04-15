#$date = get-date -uformat "%m-%d-%Y" 
$date = [DateTime]::Now.ToString("yyyyMMdd-HHmmss")


#[string]$filePath = "C:\tempFile.zip";
#
#[string]$directory = [System.IO.Path]::GetDirectoryName($filePath);
#[string]$strippedFileName = [System.IO.Path]::GetFileNameWithoutExtension($filePath);
#[string]$extension = [System.IO.Path]::GetExtension($filePath);
#[string]$newFileName = $strippedFileName + [DateTime]::Now.ToString("yyyyMMdd-HHmmss") + $extension;
#[string]$newFilePath = [System.IO.Path]::Combine($directory, $newFileName);
#
#Move-Item -LiteralPath $filePath -Destination $newFilePath;


$file = "C:\xampp\htdocs\avayareports\raw\avaya_cms_report.csv"

#insert/top header 
@("call_id,segment,date,start_time,calling_party,dialed_number,disposition,disposition_time,split_skill,ans_logid,talk_time,hold_time,acw_time,trans_out,conf,assist,last_call_work_code") +  (Get-Content $file ) | Set-Content $file


#create backup copies
Copy-Item "C:\xampp\htdocs\avayareports\raw\avaya_cms_report.csv" "C:\xampp\htdocs\avayareports\archives\avaya_cms_report-$date.csv"
Copy-Item "C:\xampp\htdocs\avayareports\raw\avaya_cms_report.csv" "\\Fs-it\sa_reports\AVAYA_REPORTS\ARCHIVE\avaya_cms_report-$date.csv"







 