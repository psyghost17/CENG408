<?php
class rt {
    private $host = "localhost";
    private $db="stajyerlerim_db";
    private $user="stajyerlerim_rt";
    private $pass="pns_stajyerlerim.com_2017";
    private function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        $con->set_charset("utf8");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQLi: " . mysqli_connect_error();
        } else {
            return $con;
        }
    }
    public function showSingleClientComment($seflink) {
        $con = $this->connect();
        $sql = "SELECT * FROM clients WHERE seflink = '$seflink'";
        $data = $con->query($sql);
        if ($data->num_rows > 0) {
            while($row = $data->fetch_assoc()) {
                if ($row["personComment"] != "") {
                    echo '<blockquote>
                                <p>'.$row["personComment"].'</p>
                                <small><cite>'.$row["authorizedPerson"].'<br/>'.$row["personTitle"].' - '.$row["client"].'</cite></small>
                            </blockquote>';
                }
            }
        }
        mysqli_close($con);
    }
   
}
?>