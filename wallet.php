<?php
session_start(); 
if (isset($_SESSION['username'])) {
    $user_id = $_SESSION['username'];
	include('config.php');
	$sql="SELECT * FROM admin where username='$user_id'";
	$query = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($query)) {
    $uid = $row['id'];
		$username = $row['name'];
		$useremail = $row['email'];
	}
} else {
    header("Location: index.php"); // Redirect the user to login
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/dashboard.css" />
    <?php include('./top.php');  ?>
  </head>
  <body>
    <div class="main-wrapper">
      <?php include('./sidebar.php');  ?>
      <div class="page-wrapper" style="min-height: 502px">
        <div class="content container-fluid">
          <!-- <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <div class="page-sub-header">
                  <h3 class="page-title">Welcome <?php echo $username;?>! </h3>
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Wallet</li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
          <?php
                      $wallet = "SELECT * from wallet where user_id=$uid";
                      $result_set = mysqli_query($conn,$wallet);
                      while ($row = mysqli_fetch_array($result_set)){
                          $total=$row["total"];
                            }
                      ?> 
          <!-- <div class="row">
            <div class="text-center"><h4>Balance: ₹ <?php echo $total; ?></h4></div>
            <div class="my-3">
                <input type="text" name="" id="wallet">
            </div>
            <div class="col-xl-4 col-sm-4  d-flex">
                <div class="card-body">500</div>
                <div>1000</div>
                <div>1500</div>
                <div>500</div>
                <div>1000</div>
                <div>1500</div> 
            </div>
          </div> -->
          <main class="main">
              <!-- Page header -->
              <div class="main-1">
                <div class="pad">
                  <div
                    class="pad1-5 dis-f dis-1"
                  >
                    <div class="dis-2">
                      <!-- Profile -->
                      <div class="center">
                        <img
                          class="dis-3 block"
                          src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80"
                          alt=""
                        />
                        <div>
                          <div class="center">
                            <h1
                              class="dis-5"
                            >
                              Good morning, Emilia Birch
                            </h1>
                          </div>
                          <dl
                            class="dis-7 dis-8"
                          >
                            <dt class="sr-only">Company</dt>
                            <dd
                              class="mar-1 dis-9"
                            >
                              <svg
                                class="mar-2"
                                x-description="Heroicon name: office-building"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                              Duke street studio
                            </dd>
                            <dt class="sr-only">Account status</dt>
                            <dd
                              class="dis-10 mar-3"
                            >
                              <svg
                                class="dis-11"
                                x-description="Heroicon name: check-circle"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                              Verified account
                            </dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                    <div class="dis-12 mar-4">
                     <a href="./addmoney.php">
                     <button
                        type="button"
                        class="dis-bt1"
                      >
                        Add money
                      </button>
                     </a>
                      <button
                        type="button"
                        class="dis-btn2"
                      >
                        Send money
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mar-5">
                <div class="pad-1 pad-2 pad-3">
                  <h2 class="dis-13">
                    Overview
                  </h2>
                  <div
                    class="dis-14 dis-15 dis-16"
                    x-max="1"
                  >
                    <!-- Card -->

                    <div class="cd-1">
                      <div class="p-5">
                        <div class="center">
                          <div class="flex-shrink-0">
                            <svg
                              class="img-1"
                              x-description="Heroicon name: scale"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"
                              ></path>
                            </svg>
                          </div>
                          <div class="img-2">
                            <dl>
                              <dt
                                class="txt-1"
                              >
                                Account balance
                              </dt>
                              <dd>
                                <div class="txt-2">
                                  $30,659.45
                                </div>
                              </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <div class="txt-3">
                        <div class="text-sm">
                          <a
                            href="#"
                            class="txt-4"
                          >
                            View all
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- More cards... -->

                    <div class="cd-1">
                      <div class="p-5">
                        <div class="center">
                          <div class="flex-shrink-0">
                            <svg
                              class="img-1"
                              x-description="Heroicon name: refresh"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                              ></path>
                            </svg>
                          </div>
                          <div class="img-2">
                            <dl>
                              <dt
                                class="txt-1"
                              >
                                Pending
                              </dt>
                              <dd>
                                <div class="txt-2">
                                  -$19,500.00
                                </div>
                              </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <div class="txt-3">
                        <div class="text-sm">
                          <a
                            href="#"
                            class="txt-4"
                          >
                            View all
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- More cards... -->

                    <div class="cd-1">
                      <div class="p-5">
                        <div class="center">
                          <div class="flex-shrink-0">
                            <svg
                              class="img-1"
                              x-description="Heroicon name: check-circle"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                              ></path>
                            </svg>
                          </div>
                          <div class="img-2">
                            <dl>
                              <dt
                                class="txt-1"
                              >
                                Processed (last 30 days)
                              </dt>
                              <dd>
                                <div class="txt-2">
                                  $20,000
                                </div>
                              </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <div class="txt-3">
                        <div class="text-sm">
                          <a
                            href="#"
                            class="txt-4"
                          >
                            View all
                          </a>
                        </div>
                      </div>
                    </div>

                    <!-- More cards... -->
                  </div>
                </div>

                <h2
                  class="h-2 pd-4 pd-5"
                >
                  Recent activity
                </h2>

                <!-- Activity list (smallest breakopoint only) -->
                <div class="dis-17 dis-18">
                  <ul
                    class="dis-19 dis-20"
                    x-max="1"
                  >
                    <li>
                      <a
                        href="#"
                        class="dis-21"
                      >
                        <span class="center space-x-4">
                          <span class="tra-1">
                            <svg
                              class="tra-2"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="tra-3"
                            >
                              <span class="truncate"
                                >Payment to Molly Sanders</span
                              >
                              <span
                                ><span class="tra-4"
                                  >$20</span
                                >
                                USD</span
                              >
                              <span>July 11, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="tra-5"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li>

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate">Payment to Doug Mann</span>
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$19,500</span
                                >
                                USD</span
                              >
                              <span>July 5, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Erica Frost</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$8,750</span
                                >
                                USD</span
                              >
                              <span>July 4, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Miley Davis</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$300</span
                                >
                                USD</span
                              >
                              <span>July 1, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li>

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Molly Sanders</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$20,000</span
                                >
                                USD</span
                              >
                              <span>June 17, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate">Payment to Doug Mann</span>
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$19,500</span
                                >
                                USD</span
                              >
                              <span>June 14, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Erica Frost</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$8,750</span
                                >
                                USD</span
                              >
                              <span>June 3, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Miley Davis</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$300</span
                                >
                                USD</span
                              >
                              <span>May 8, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Molly Sanders</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$20,000</span
                                >
                                USD</span
                              >
                              <span>May 5, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate">Payment to Doug Mann</span>
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$19,500</span
                                >
                                USD</span
                              >
                              <span>May 1, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Erica Frost</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$8,750</span
                                >
                                USD</span
                              >
                              <span>April 14, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Miley Davis</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$300</span
                                >
                                USD</span
                              >
                              <span>April 11, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Molly Sanders</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$20,000</span
                                >
                                USD</span
                              >
                              <span>April 3, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate">Payment to Doug Mann</span>
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$19,500</span
                                >
                                USD</span
                              >
                              <span>April 2, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Erica Frost</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$8,750</span
                                >
                                USD</span
                              >
                              <span>March 29, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->

                    <!-- <li>
                      <a
                        href="#"
                        class="block px-4 py-4 bg-white hover:bg-gray-50"
                      >
                        <span class="flex items-center space-x-4">
                          <span class="flex-1 flex space-x-2 truncate">
                            <svg
                              class="flex-shrink-0 h-5 w-5 text-gray-400"
                              x-description="Heroicon name: cash"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              aria-hidden="true"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                            <span
                              class="flex flex-col text-gray-500 text-sm truncate"
                            >
                              <span class="truncate"
                                >Payment to Miley Davis</span
                              >
                              <span
                                ><span class="text-gray-900 font-medium"
                                  >$300</span
                                >
                                USD</span
                              >
                              <span>March 15, 2020</span>
                            </span>
                          </span>
                          <svg
                            class="flex-shrink-0 h-5 w-5 text-gray-400"
                            x-description="Heroicon name: chevron-right"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </span>
                      </a>
                    </li> -->

                    <!-- More items... -->
                  </ul>

                  <nav
                    class="nav-1"
                    aria-label="Pagination"
                  >
                    <div class="nav-c">
                      <a
                        href="#"
                        class="nav-bt"
                      >
                        Previous
                      </a>
                      <a
                        href="#"
                        class="marl-3 nav-bt"
                      >
                        Next
                      </a>
                    </div>
                  </nav>
                </div>

                <!-- Activity table (small breakopoint and up) -->
                <div class="tra6">
                  <div class="tra-6">
                    <div class="tra-7">
                      <div
                        class="tra-8 tra-9"
                      >
                        <table class="tra-10">
                          <thead>
                            <tr>
                              <th
                                class="tra-11"
                              >
                                Transaction
                              </th>
                              <th
                                class="tra-12"
                              >
                                Amount
                              </th>
                              <th
                                class="hidden tra-11"
                              >
                                Status
                              </th>
                              <th
                                class="tra-13"
                              >
                                Date
                              </th>
                            </tr>
                          </thead>
                          <tbody
                            class="bd-1"
                            x-max="1"
                          >
                            <tr class="bg-white">
                              <td
                                class="tr1"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="tr2"
                                  >
                                    <svg
                                      class="tr3"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="tr4"
                                    >
                                      Payment to Molly Sanders
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="tr5"
                              >
                                <span class="tr6"
                                  >$20,000
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden tr7"
                              >
                                <span
                                  class="tr8"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="tr9"
                              >
                                July 11, 2020
                              </td>
                            </tr>

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Doug Mann
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$19,500
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize"
                                >
                                  processing
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                July 5, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Erica Frost
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$8,750
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                July 4, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Miley Davis
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$300
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                July 1, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Molly Sanders
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$20,000
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 capitalize"
                                >
                                  failed
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                June 17, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Doug Mann
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$19,500
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize"
                                >
                                  processing
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                June 14, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Erica Frost
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$8,750
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                June 3, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Miley Davis
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$300
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                May 8, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Molly Sanders
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$20,000
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                May 5, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Doug Mann
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$19,500
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize"
                                >
                                  processing
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                May 1, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Erica Frost
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$8,750
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 capitalize"
                                >
                                  failed
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                April 14, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Miley Davis
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$300
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                April 11, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Molly Sanders
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$20,000
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                April 3, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Doug Mann
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$19,500
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize"
                                >
                                  processing
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                April 2, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Erica Frost
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$8,750
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                March 29, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->

                            <!-- <tr class="bg-white">
                              <td
                                class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900"
                              >
                                <div class="flex">
                                  <a
                                    href="#"
                                    class="group inline-flex space-x-2 truncate text-sm"
                                  >
                                    <svg
                                      class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                      x-description="Heroicon name: cash"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20"
                                      fill="currentColor"
                                      aria-hidden="true"
                                    >
                                      <path
                                        fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"
                                      ></path>
                                    </svg>
                                    <p
                                      class="text-gray-500 truncate group-hover:text-gray-900"
                                    >
                                      Payment to Miley Davis
                                    </p>
                                  </a>
                                </div>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                <span class="text-gray-900 font-medium"
                                  >$300
                                </span>
                                USD
                              </td>
                              <td
                                class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block"
                              >
                                <span
                                  class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize"
                                >
                                  success
                                </span>
                              </td>
                              <td
                                class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500"
                              >
                                March 15, 2020
                              </td>
                            </tr> -->

                            <!-- More rows... -->
                          </tbody>
                        </table>
                        <!-- Pagination -->
                        <nav
                          class="nav-2 nav-2-c"
                          aria-label="Pagination"
                        >
                          <div class="hidden bl-1">
                            <p class="txt1">
                              Showing
                              <span class="font-medium">1</span>
                              to
                              <span class="font-medium">10</span>
                              of
                              <span class="font-medium">20</span>
                              results
                            </p>
                          </div>
                          <div
                            class="nav-2-h nav-2a"
                          >
                            <a
                              href="#"
                              class="nav-handle"
                            >
                              Previous
                            </a>
                            <a
                              href="#"
                              class="marl-3 nav-handle"
                            >
                              Next
                            </a>
                          </div>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </main>
        </div>
      </div>
    </div>

    <div class="sidebar-overlay"></div>
  </body>
</html>
