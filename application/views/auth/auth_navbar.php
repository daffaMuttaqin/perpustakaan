<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/all.css">

    <!-- MDB -->
    <!-- Font Awesome -->
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    /> -->
    <!-- Google Fonts -->
    <!-- <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    /> -->
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
      rel="stylesheet"
    />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    
  </head>

  <body style="font-family: 'Rubik', sans-serif;">    
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg" style="background-color: #6477db">
      <!-- Container wrapper -->
      <div class="container-fluid">

        <!-- Collapsible wrapper -->
        <div class="d-flex flex-row">
          <!-- Navbar brand -->
          <div class="navbar-brand mt-2 mt-lg-0">
            <img
              src="https://media.discordapp.net/attachments/1182687255895232554/1182687277265190992/icons8_reading_unicorn_90px_1.png?ex=65859a5c&is=6573255c&hm=66eeba345ebd356e895368aa7444ac15c97c647f9d9e9f939e0f9bebe2fa9414&=&format=webp&quality=lossless"
              height="35"
              width="35"
              alt="Library Logo"
              loading="lazy"
            />
          </div>

          <!-- Perpustakaan SMK N1 Bumi Ratu Nuban -->
          <h6 class="text-white my-auto fs-5 d-none d-sm-block">
            Perpustakaan SMK N1 Bumi Ratu Nuban
          </h6>

        </div>

        <!-- Right elements -->
        <div class="d-flex flex-nowrap align-items-center">

          <!-- Notifications -->
          <div class="px-2 px-sm-1">
            <!-- Modal -->
            <div type="button" class="" style="background-color: #6477db" data-bs-toggle="modal" data-bs-target="#notificationModal">
              <div class="">
                <img
                  src="https://media.discordapp.net/attachments/1182687255895232554/1182700580322426970/Notification.png?ex=6585a6bf&is=657331bf&hm=de80590cd84dd92d21ccdcc4517e8ed9e4e23a931a7c416aa94294c726701b99&=&format=webp&quality=lossless"
                  height="32"
                  width="30"
                  alt="Library Logo"
                  loading="lazy"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
          
          <!-- Avatar -->
          <div class="px-lg-2 px-sm-1">
            <!-- Modal -->
            <div type="button" class="" style="background-color: #6477db" data-bs-toggle="modal" data-bs-target="#avatarModal">
              <div class="">
                <img
                  src="https://media.discordapp.net/attachments/1182687255895232554/1182688623473197170/2089068507.png?ex=65859b9d&is=6573269d&hm=b9edb411642e60a2a1550f415405409153ac0e01cf9e4441c68d3cb03727f3a1&=&format=webp&quality=lossless"
                  height="50"
                  width="50"
                  alt="Library Logo"
                  loading="lazy"
                />
              </div>
            </div>
          </div>
        </div>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- End Navbar -->

    <!-- Modal Notification-->
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Notification</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Avatar-->
    <div class="modal fade" id="avatarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>