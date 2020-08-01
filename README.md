This demo cluster of 3 nodes (2 nodes + master) contains a playbook that deploys a test application that allow people to register for a pet donation. The deployment is done with ansible, the application uses the following stack:

php javascript htlm css

mysql apache

The application server (webserver) and the database server (dbserver). The page itself is just an interface without back end, the registration is done remotely on the database server as it hosts its own very crude API using apache.
