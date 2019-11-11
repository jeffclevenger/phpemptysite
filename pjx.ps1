try {
    # ("$(Get-Date) $env:USERNAME @ $env:COMPUTERNAME")| Out-File -FilePath C:\Temp\log.txt -Append -Encoding utf8;$file = Get-Content C:\Temp\log.txt;$body = '{"name" : "' + $file + '"}';iwr -uri "http://jeffc-lt2:7071/api/PJX" -Body $body -Method PO
    $data = [PSCustomObject]@{
        Date     = Get-Date
        Computer = $env:COMPUTERNAME
        User     = $env:USERNAME
    }

    $body = [PSCustomObject]@{
        Name = $data
    }

    Invoke-WebRequest -Method Post -Uri "https://pjx.azurewebsites.net/api/pjx" -Body ($body | ConvertTo-Json)
}
catch {
    $_ | Out-File "$($PSScriptRoot)\..\Errors\errors.log"
}
