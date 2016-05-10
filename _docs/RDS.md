---
title: RDS
---

## EC2 Security Group

Security group name | rds
:--- | :---
Description | rds
VPC | * denotes default VPC `Default`

#### Inbound
Type | Protocol |Port Range | Source
--- | --- | --- | --- | ---
MYSQL/Aurora | TCP | 3306 | sg-XXXXXXXX (AWS-OpsWorks-PHP-App-Server)
MYSQL/Aurora | TCP | 3306 | sg-XXXXXXXX (AWS-OpsWorks-nodejs-App-Server)

#### Outbound `Default`
Type | Protocol |Port Range | Source
--- | --- | --- | --- | ---
All traffic | All | All | 0.0.0.0/0

---

## Parameter Group
Parameter Group Family | mysql5.7  
:--- | :---
Name | basic-pg
Description | basic pg

### Parameters Comparison
Parameter | basic-pg | default
:--- | :--- | :---
slow_query_log | 1 | &lt;engine-default&gt;
innodb_autoinc_lock_mode | 0 | &lt;engine-default&gt;

---

## Instance
### DB Details
#### Instance Specifications
DB Engine | mysql
:--- | :---
License Model | General Public License
DB Engine Version | 5.7.10
DB Instance Class | db.t2.micro
Multi-AZ Deployment | No
Storage Type | General Purpose (SSD) `Default`
Allocated Storage* | 10 GB

#### Settings
DB Instance Identifier* | mydbinstance
:--- | :---
Master Username* | awsuser
Master Password* | mypassword

### Advanced Settings
#### Network & Security
VPC* | Default VPC `Default`
:--- | :---
Subnet Group | default `Default`
Publicly Accessible | Yes `Default`
Availability Zone | No Preference `Default`
VPC Security Group(s) | RDS

#### Database Options
Database Name | ci_postmaster
:--- | :---
Database Port | 3306 `Default`
DB Parameter Group | basic-pg
Option Group | default.mysql5.7 `Default`

#### Backup
`Default`

#### Maintenance
`Default`

---

## Config
Update `db_hostname` in [../blob/master/opsworks/custom.json#L9](../blob/master/opsworks/custom.json#L9)

---

DB Engine | mysql
:--- | :---
DB Instance Class | db.t2.micro