## PHP JSON API

### Requirements

<ul>
    <li>Install Xampp</li>
    <li>Install Composer</li>
    <li>Install Node.js</li>
    <li>Create a MYSQL Database</li>
    <li>Install Postman</li>
</ul>

### Instructions

<ul>
    <li>Git Clone the Repo</li>
    <li>CD into Directory</li>
    <li>Run Composer Install</li>
    <li>Run Npm Install && Npm Run Dev</li>
    <li>Make sure You have the right credentials in the .env file</li>
    <li>Run PHP Artisan Migrate</li>
    <li>Run PHP Artisan Serve</li>
    <li>Your Local Site is running at localhost:8000</li>
    <li>Use Postman or any client to send the Spec JSON Payload to localhost:8000/capture-heartbeat</li>
    <li>You can login with any user account you create, feel free to register to view the captured heartbeats on the dashboard, left out user Factory for Brevity</li>

</ul>
<br>
<h4><strong>Notes: </strong><span>Use POST method to create a Request, There is an option with Passport and Bearer Tokens, We can also try implement the request with the Http Client interfacing with a list of Headers, We can refactor with Queues for scaling in a production environment</span></h4>
<h3>Enjoy!!!</h3>
