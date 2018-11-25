<?php

namespace Tests\Unit\HttpSignatures;

abstract class TestKeys
{
    const rsaPrivateKey =
'-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAxyfPtnW/CakdLpZVh90sR+hpRwiBBdS/za6wal0pFddl2xcL
sHY/IA1u348xOc4LEY2D0807o1IXSEaqrt9eUkAh+yLGKgDCWLGzW026HBMgojhn
Y702pmRI2CGqP0xtzrynCSmSMvhdKM9IMc7DGf7Wdo4Y0En0KPat+IyCZpbf7jUX
cGL/tjxMKS3fXNgthGWVDU2TBSQRFM+fgeH9egODd4DfpzfaUoUDcoB/CZ1FEa4+
wNfXR5CZ4WjIaeVbCQ09maup07J+KaGe8SQ9LjcUuityyuNBjy5nvQkbmDfAh082
2lZQYR62FM5EAlNptThODg6q4wkIQ+spLv1dSwIDAQABAoIBAQCXYQyCvVd7qV80
JTNYNWbONbuoMa+Y1hEA77LK9osfPf3/HbJV7FupKmzHY5lgPdyt9+pnWQ3m46Qs
3QIqMEEKthLeSJ1mGfOf5VrWoOtBIczhYYw9BPsAWSQBnP1CZf7lcQJqdX3aXmy5
c22F5oroPIuZzALSeBQt+utcDLml7dr4D2TbFkmh3ocGGK1SDUATGBVQG+MAVGFQ
J5BYLFPUp8QC2o1672/aqNkx1XO08vIoANtWz5Rjf2hCRrdw1liAN30nnZ+l9h3x
mbof0sUQMPxxmZ/u+HGPShkN+Y/DLfIyjHlpXI127WBwFLr5P/iL6+DDbsn4Iav3
L57kSxhhAoGBAO6v/ojuZFE0h3mKHy+SdWggcRqe8Re2C5QTODTy7hRwdUv791lk
jFnONqlcn51H/hDQwP8nnG8HFxJYl4IoCCdcWfeFlQ82oerIWmsX6H4BFBfF7I9Y
3Muo1BWj4vif/mwwsL0NOAn5XCO/Gi1nF7YZBd/or+X/x4XLSWKnBISRAoGBANWZ
xzhpUltGPfKWgfE+ETbZC++Nqsd1MHAdZOhOaeBY615DdmfVv7ryaTWJ1kRbRmq0
9eKmopEYqfCwyfKZ/8+2dudhndnnEqmiJPu2WFyEiR9sb8NMPcOOjKPhUMgP0ZNx
Ynz/oTvBOylvU2MfC0hpLghq50JeEJSiGxzE9kIbAoGAejcpeMnAGghwmd4Ma9pt
PXznDP93aXGwagiRTiNZnqOam+aPV3lxmAZL3NptbCZRxCBvwfZxVjRmLuGn6mA/
FJBoDKKcmWaa79HY4l8ij2pT9HxGzXttyuZOeiopbK7XomQoCxU6rXi+IhuW9sqD
zJzxch39+yHF8w8NK3Njj9ECgYEAj8ZXu5fhEIECV5SJWKmvipykFRXleyZdeUm/
z0Jgr9sKasO8In5U9PAQczIZYJ+TkWXHEE2bpVDVqqZE+KBB+T1XYb1qM+7+t+Hl
ROzjIzsu1VD3FZzvAf+kmPajmlZTegxa/8pNa9xQBz7hARo3TQFHM/FJQnnwbSuE
VmQZYjsCgYA9ADxvlgGQmo3uHup6u54S7MgwvzIK7WiXKkuoI5rp0B0mwTr3loVt
3r3tZBH4+z17fVhmoQ4a4kYT8ixn0XpaL0LOv8s02b36XCNlrfPlafOwhHfOHmlz
zQnzviLiUOgXyD8FwZlYx+hTM09CYPcdJWSPl6JVF7uxm2fX/HdS3w==
-----END RSA PRIVATE KEY-----';
    const rsaCert =
'-----BEGIN CERTIFICATE-----
MIICmjCCAYICCQDIxrpvPCnqRjANBgkqhkiG9w0BAQsFADAPMQ0wCwYDVQQDDAR0
ZXN0MB4XDTE4MDgxODEyMjMzMloXDTI4MDgxNTEyMjMzMlowDzENMAsGA1UEAwwE
dGVzdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMcnz7Z1vwmpHS6W
VYfdLEfoaUcIgQXUv82usGpdKRXXZdsXC7B2PyANbt+PMTnOCxGNg9PNO6NSF0hG
qq7fXlJAIfsixioAwlixs1tNuhwTIKI4Z2O9NqZkSNghqj9Mbc68pwkpkjL4XSjP
SDHOwxn+1naOGNBJ9Cj2rfiMgmaW3+41F3Bi/7Y8TCkt31zYLYRllQ1NkwUkERTP
n4Hh/XoDg3eA36c32lKFA3KAfwmdRRGuPsDX10eQmeFoyGnlWwkNPZmrqdOyfimh
nvEkPS43FLorcsrjQY8uZ70JG5g3wIdPNtpWUGEethTORAJTabU4Tg4OquMJCEPr
KS79XUsCAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAgnvP8UDFND0G/R5ptKeaAUvF
xmDWnyBOv8/GWb8i9zesBfgjmjoKfjIgbYS/z0ZqMHApuv6td6NovsCVgpfEpLAv
zxtljLtOWEeQ/25bespBiTiOVp1w8BzEZ2IhNX6M0LxXQkUXgeyOC2wnH6SH9rTW
USM0aZhhDcdOZ4q+OkpAN6uux3r0QNJLdU8vInBGoyE3s+7MjEun30HQy24HSgEA
p/Ee+dkqU2Jp7wr5omMzurGrEwre0KjNLbrDvcb/0u8r7RA5sghHiE7MUe8acGqR
GyMYMn7AX97SD2yxYgwt7i/v65wkAC5oxXA2Yg1TTJZrLD6obGv+wELnePhKgw==
-----END CERTIFICATE-----
';
    const rsaPublicKey =
'-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxyfPtnW/CakdLpZVh90s
R+hpRwiBBdS/za6wal0pFddl2xcLsHY/IA1u348xOc4LEY2D0807o1IXSEaqrt9e
UkAh+yLGKgDCWLGzW026HBMgojhnY702pmRI2CGqP0xtzrynCSmSMvhdKM9IMc7D
Gf7Wdo4Y0En0KPat+IyCZpbf7jUXcGL/tjxMKS3fXNgthGWVDU2TBSQRFM+fgeH9
egODd4DfpzfaUoUDcoB/CZ1FEa4+wNfXR5CZ4WjIaeVbCQ09maup07J+KaGe8SQ9
LjcUuityyuNBjy5nvQkbmDfAh0822lZQYR62FM5EAlNptThODg6q4wkIQ+spLv1d
SwIDAQAB
-----END PUBLIC KEY-----
';
}