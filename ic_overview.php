<?php
	session_start();
    ob_start();
    require_once('check-login.php');
	include_once 'header-logged-in.php';
?>

<script src="js/yourcoin.js" type="text/javascript"></script>

<script>

    function myTimer() {
        getNativeCurrencyBalance('txtMyAddress', 'pWalletBalance');
    }

    window.onload = function(){ myTimer(); setInterval(myTimer, 10000); };

</script>


<div class="container theme-showcase" role="main">

    <h2>Account Overview:</h2>
    <br>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <div class="row">
                <label><strong>Your Wallet Address</strong></label>
            </div>
            <div class="row">
                <input id="txtMyAddress" type="text" class="form-control" size=45 value="<?php echo $_SESSION['address'] ?>" readonly="readonly" />
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="row">
                <label><strong>Your User name</strong></label>
            </div>
            <div class="row">
                <input id="txtMyUserName" type="text" class="form-control" size=45 value="<?php echo $_SESSION['user_name'] ?>" readonly="readonly" />
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <strong>Balance</strong> - <b><label id="pWalletBalance"></label></b>
        </div>
    </div><br/>
        <div class="col-md-1"></div>

    </div>

</div>

<?php
	include_once 'footer.php';
	ob_end_flush();
?>
