<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Stock Market Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" >
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png" />
</head>
<body>
  <div class="preloader"></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="company-logo" src="<?php echo base_url(); ?>assets/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <?php if($userdata_broker['logged_in']) : ?>
                <li class="nav-item <?php if($title == "Home") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokerhome">Home</a>
                </li>
                <li class="nav-item <?php if($title == "Shares") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokershare">Shares</a>
                </li>
                <li class="nav-item <?php if($title == "TakeAdvises") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokeradvises">Take Advises</a>
                </li>
                <li class="nav-item <?php if($title == "BuySell") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokerbuysell">Buy/Sell</a>
                </li>
                <li class="nav-item <?php if($title == "Transactions") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokertransactions">Transactions</a>
                </li>
                <li class="nav-item <?php if($title == "Rankings") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokerrankings">Rankings</a>
                </li>
                <li class="nav-item <?php if($title == "EditProfile") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>brokereditprofile">Edit Profile</a>
                </li>
                <li class="nav-item <?php if($title == "DevelopingTeam") echo "active"; ?>">
                  <a class="nav-link" href="<?php echo base_url(); ?>team">Developing Team</a>
                </li>

              <?php endif; ?>
          </ul>

          <ul class="navbar-nav navbar-right">
            <?php if($userdata_broker['logged_in']) : ?>
              <li class="nav-item <?php if($title == "Bank") echo "active"; ?>">
                <a class="nav-link active" href="<?php echo base_url(); ?>loginbank">Bank Account</a>
              </li>
              <li class="nav-item dropdown">
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logout</button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item">Hi, <?php echo $userdata_broker['user_name']; ?>..!</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>brokerlogout">Log Out</a>
                  </div>
                </div>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <?php if($this->session->flashdata('logged_out')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('logged_out').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_success')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('login_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('cancellation_success')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('cancellation_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('cancellation_denied')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('cancellation_denied').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('password_change_success')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('password_change_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('password_change_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('password_change_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('broker_account_save_success')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('broker_account_save_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('broker_account_save_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('broker_account_save_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('bank_account_success')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('bank_account_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('bank_account_save_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('bank_account_save_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('buying_order_succes')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('buying_order_succes').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('buying_order_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('buying_order_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('selling_order_succes')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('selling_order_succes').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('selling_order_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('selling_order_failed').'</p>'; ?>
    <?php endif; ?>

    <div class="pushfooter">
      <div class="container" style="background: white; min-height: 100vh;">
        <div class="text-right py-2"><h4>Current Turn : <?php echo $turn; ?></h4></div>
