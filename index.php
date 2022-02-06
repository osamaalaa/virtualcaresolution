<?php include "src/gaurd.php";
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Document Settings -->
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="vcs,yasclinic,yasclinicgroup,virtualcaresolutions" />
	<meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
	<meta name="description" content="YAS Clinic Group , VCS" />
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/fav.ico">

	<!-- Page Title -->
	<title>VCS | Virtual Care Solution</title>
	<!-- App css -->
	<!-- <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	<link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" /> -->

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,600,700,900,200' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">

	<!-- Custom css file -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="assets/css/jquery.fullPage.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/photoswipe.css">
	<link rel="stylesheet" href="assets/css/default-skin/default-skin.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">

</head>

<body class="agora-theme">

	<!-- Container -->
	<main class="container">
		<!-- Mobile Menu -->
		<div class="mobile-menu-overlay transition">
			<div class="mobile-menu" style="display:flex;align-items: center;">
				<i class="fa fa-times fa-2x"></i>
			</div>
			<ul class="mobile-menu-content">
				<li class="mobile-menu-item">
					<a href="#">Applications</a>
					<!-- Drop Down -->
					<ul>
						<li><a href="https://emr.virtualcaresolution.de/" target="_blank">EMR</a></li>
						<li><a href="https://lms.virtualcaresolution.de/" target="_blank">LMS</a></li>
						<li><a href="https://hr.daspqw.com/" target="_blank">HxM</a></li>
					</ul>
				</li>
				<li class="mobile-menu-item">
					<a class="nav-link page-scroll" href="">My Account</a>
					<ul class="sub-menu dropdown-btn">
						<li><a href="dashboard.php"><?php echo $_SESSION["username"] ?> <i class="fa fa-user" aria-hidden="true"></i></a></li>
						<a id="username" style="display: none;"><?php echo $_SESSION["username"] ?></a>
						<li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
					</ul>
				</li>
				<li class="mobile-menu-item">
					<a href="contactus.php">contact</a>
				</li>
			</ul>
		</div>
		<!-- /Mobile Menu -->

		<!-- Header -->
		<header class="transition header fixed">
			<div class="main-menu" style="display:flex;">
				<div id="logo">
					<a href="index.php">
						<img src="assets/images/yasLogo.png" alt="yas-clinic-group" style="width:140px;height:40px;padding:1px;">
					</a>
				</div>
				<!-- Menu -->
				<nav id="menu" class="col-md-10 col-sm-10" style="display:inline; margin-left:auto;">
					<ul class="hidden-xs">
						<li>
							<a href="#">Applications</a>
							<!-- Drop Down -->
							<ul>
								<li><a href="https://emr.virtualcaresolution.de/" target="_blank">EMR</a></li>
								<li><a href="https://lms.virtualcaresolution.de/" target="_blank">LMS</a></li>
								<li><a href="https://hr.daspqw.com/" target="_blank">HxM</a></li>
							</ul>
						</li>
						<li><a href="contactus.php">Contact</a></li>
						<!-- <li><a href="https://virtualcaresolution.de">Login</a></li> -->
						<li class="nav-item dropdown">
							<a class="nav-link page-scroll" href="">My Account</a>
							<ul class="sub-menu dropdown-btn">
								<li><a href="dashboard.php"><?php echo $_SESSION["username"] ?> <i class="fa fa-user" aria-hidden="true"></i></a></li>
								<a id="username" style="display: none;"><?php echo $_SESSION["username"] ?></a>
								<li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
							</ul>
						</li>
					</ul>
					<div class="mobile-menu col-xs-2 pull-right visible-xs" style="display:inline-flex;">
						<i class="fa fa-bars fa-2x"></i>
					</div>
				</nav>
				<!-- /Menu -->
			</div>
		</header>
		<!-- /Header -->

		<!-- Content -->
		<section class="content fullpage transition">
			<form action="javascript:void(0)" method="post" id="ajax-form">
				<!-- Content -->
				<section class="content fullpage transition">
					<form action="javascript:void(0)" method="post" id="ajax-form">
						<!-- Section One -->
						<section class="section" id="section1">
							<div class="cover-titles">
								<div class="align-left">
									<h1 class="title">Communicate</h1>
									<p style="font-size: 34px;">For the future</p>
									
									<a href="#" onClick="document.getElementById('section2').scrollIntoView();" class="btn" style="color: white">
													<span>Lets Begin</span>
													<i class="fa fa-sign-in" style="color: white"></i>
												</a>
								</div>
							</div>
							</div>

							</div>

							<!-- <a href="#" onClick="window.open('https://app.smith.ai/chat/standalone-widget/ec95fb4d-da0c-43d2-8145-d3f8884bd3fe/', 'Chat', 'resizable,height=700,width=450'); return false;"><img src="https://s3-us-west-1.amazonaws.com/prod-smith-dynamic/static/chat/chat-icons/smithai-chat-icon.png" width="144" alt="Chat"></a> -->
						</section>
						<style>
							.sample {
								width: 80%;
								margin: 0;
								padding: 0;

							}

							@media only screen and (max-width: 700px) {
								body {
									margin: 0;
									padding: 0;
								}

								.sample {
									width: 100%;
								}
							}

							.card-group {
								display: flex;
								flex-flow: row wrap;
							}

							.card:not(:last-child) {
								border-top-right-radius: 0;
								border-bottom-right-radius: 0;
							}

							.card-group>.card {
								flex: 1 0 0%;
								margin-bottom: 0;
							}

							.card {
								box-shadow: 0 .75rem 6rem rgba(56, 65, 74, .03);
								margin-bottom: 24px;
							}

							.card {
								position: relative;
								display: flex;
								flex-direction: column;
								min-width: 0;
								word-wrap: break-word;
								/* background-color: #fff; */
								background-image: url("assets/images/telemedicine.jpg.webp");
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;
								background-clip: border-box;
								border: 0 solid #f7f7f7;
								border-radius: .25rem;
								border-top-right-radius: 0.25rem;
								border-bottom-right-radius: 0.25rem;
							}
						</style>

						<section class="section" id="section2" style="width:100%;height:100%">
							<div class="row">
								<div class="col-lg-6">
									<!-- Simple card -->
									<div class="card">

										<div class="card-body">

											<div id="local_stream" class="sample 1video- placeholder"></div>
											<div class="cover-titles">

												<a href="#" id="join" class="btn" style="color: white">
													<span>Join</span>
													<i class="fa fa-arrow-right"></i>
												</a>

												<a onclick="Copy()" href="#" class="btn" onclick="Copy()" style="color: white">
													<span>COPY LINK</span>
													<i class="fa fa-arrow-right" style="color: white"></i>
												</a>

												<a href="#" type="submit" class="btn" name="leave" id="leave" style="color: white">
													<span>LEAVE</span>
													<i class="fa fa-sign-out" style="color: white"></i>
												</a>

												<div id="remainingTime" name="timer" class="timer">
												</div>
												<div id="price" name="timer" class="timer" style="display: none;">
												</div>
											</div>
										</div>

									</div>
								</div>

								<div class="col-lg-6">
									<div class="card">

										<div class="card-body">

											<div id="video" class="videoContainer">

												<div id="video_autoplay_local" class="sample 1autoplay-fallback hide"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</form>
					<!-- /Section One -->

				</section>
				<!-- /Content -->

				<!-- Footer -->
				<footer id="footer" class="fixed white">
					<p>© 2022 Copyright by.PQW - IT Managment consulting - Germany for YAS Clinic Group.</p>
				</footer>
				<!-- /Footer -->

	</main>
	<!-- /Container -->

	<!-- JS -->

	<!-- jquery-1.11.3.min js -->
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>

	<!-- Plugins -->
	<script type="text/javascript" src="assets/js/jquery.fullPage.min.js"></script>
	<script type="text/javascript" src="assets/js/imagesloaded.min.js"></script>
	<script type="text/javascript" src="assets/js/masonry.​min.js"></script>
	<script type="text/javascript" src="assets/js/website-smooth-scroll.js"></script>
	<script type="text/javascript" src="assets/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="assets/js/photoswipe-ui-default.min.js"></script>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

	<!-- Main js -->
	<script src="assets/js/main.js"></script>
	<script src="vendor/materialize.min.js"></script>
	<script src="AgoraRTCSDK-3.3.1.js"></script>
	<script>
		var params = {};
		var data = {
			"KEY": "34c06e4669304ce98e30e73ce761bb08",
			"user_id": "1",
		}
		var link = '';
		$(document).ready(function() {
			console.log("read");
			$.ajax({
				url: 'sample/RtcTokenBuilderSample.php',
				type: 'POST',
				data: data,
				success: function(response) {
					response = JSON.parse(response);
					params = response[0];
					link = "reciever.php?token=" + response[1].token + "&uid=" + response[0].uid + "&channel=" + response[1].channel;

				},
				error: function(err) {
					console.log(err);
				}
			});
		});

		function Copy() {
			Toast.notice("Link Copied to clipboard!");
			var copyText = "http://localhost/new-vcs/" + link;
			$('<input>').val(copyText).appendTo('body').select();
			//  copyText.select();
			//copyText.setSelectionRange(0, 99999);
			document.execCommand("copy");
		}
		console.log("agora sdk version: " + AgoraRTC.VERSION + " compatible: " + AgoraRTC.checkSystemRequirements());
		var resolutions = [{
				name: "default",
				value: "default",
			},
			{
				name: "480p",
				value: "480p",
			},
			{
				name: "720p",
				value: "720p",
			},
			{
				name: "1080p",
				value: "1080p"
			}
		]

		function Toastify(options) {
			M.toast({
				html: options.text,
				classes: options.classes
			})
		}

		var Toast = {
			info: (msg) => {
				Toastify({
					text: msg,
					classes: "info-toast"
				})
			},
			notice: (msg) => {
				Toastify({
					text: msg,
					classes: "notice-toast"
				})
			},
			error: (msg) => {
				Toastify({
					text: msg,
					classes: "error-toast"
				})
			}
		}

		function validator(formData, fields) {
			var keys = Object.keys(formData)
			for (let key of keys) {
				if (fields.indexOf(key) != -1) {
					if (!formData[key]) {
						Toast.error("Please Enter " + key)
						return false
					}
				}
			}
			return true
		}

		function serializeformData() {
			var formData = $("#form").serializeArray()
			//console.log(formData + "asdasdasdasdadsdasdasdads" + $("#form").serializeArray());
			var obj = {}
			for (var item of formData) {
				var key = item.name
				var val = item.value
				obj[key] = val
			}
			return obj
		}

		function addView(id, show) {
			if (!$("#" + id)[0]) {
				$("<div/>", {
					id: "remote_video_panel_" + id,
					class: "video-view sample",
				}).appendTo("#video")

				$("<div/>", {
					id: "remote_video_" + id,
					class: "video-placeholder sample",
				}).appendTo("#remote_video_panel_" + id)

				$("<div/>", {
					id: "remote_video_info_" + id,
					class: "video-profile " + (show ? "" : "hide sample"),
				}).appendTo("#remote_video_panel_" + id)

				$("<div/>", {
					id: "video_autoplay_" + id,
					class: "autoplay-fallback hide sample",
				}).appendTo("#remote_video_panel_" + id)
			}
		}

		function removeView(id) {
			if ($("#remote_video_panel_" + id)[0]) {
				// $("#remote_video_panel_" + id).remove()
			}
		}

		function getDevices(next) {
			AgoraRTC.getDevices(function(items) {
				items.filter(function(item) {
						return ["audioinput", "videoinput"].indexOf(item.kind) !== -1
					})
					.map(function(item) {
						return {
							name: item.label,
							value: item.deviceId,
							kind: item.kind,
						}
					})
				var videos = []
				var audios = []
				for (var i = 0; i < items.length; i++) {
					var item = items[i]
					if ("videoinput" == item.kind) {
						var name = item.label
						var value = item.deviceId
						if (!name) {
							name = "camera-" + videos.length
						}
						videos.push({
							name: name,
							value: value,
							kind: item.kind
						})
					}
					if ("audioinput" == item.kind) {
						var name = item.label
						var value = item.deviceId
						if (!name) {
							name = "microphone-" + audios.length
						}
						audios.push({
							name: name,
							value: value,
							kind: item.kind
						})
					}
				}
				next({
					videos: videos,
					audios: audios
				})
			})
		}

		var rtc = {
			client: null,
			joined: false,
			published: false,
			localStream: null,
			remoteStreams: [],
			params: {}
		}

		function handleEvents(rtc) {
			// Occurs when an error message is reported and requires error handling.
			rtc.client.on("error", (err) => {
				console.log(err)
			})
			// Occurs when the peer user leaves the channel; for example, the peer user calls Client.leave.
			rtc.client.on("peer-leave", function(evt) {
				var id = evt.uid;
				console.log("id", evt)
				let streams = rtc.remoteStreams.filter(e => id !== e.getId())
				let peerStream = rtc.remoteStreams.find(e => id === e.getId())
				if (peerStream && peerStream.isPlaying()) {
					peerStream.stop()
				}
				rtc.remoteStreams = streams
				if (id !== rtc.params.uid) {
					removeView(id)
				}
				Toast.notice("peer leave")
				console.log("peer-leave", id)
			})
			// Occurs when the local stream is published.
			rtc.client.on("stream-published", function(evt) {
				Toast.notice("stream published success")
				console.log("stream-published")


			})
			// Occurs when the remote stream is added.
			rtc.client.on("stream-added", function(evt) {
				var remoteStream = evt.stream
				var id = remoteStream.getId()
				Toast.info("stream-added uid: " + id)
				if (id !== rtc.params.uid) {
					rtc.client.subscribe(remoteStream, function(err) {
						console.log("stream subscribe failed", err)
					})
				}
				console.log("stream-added remote-uid: ", id)
			})
			// Occurs when a user subscribes to a remote stream.
			rtc.client.on("stream-subscribed", function(evt) {
				var remoteStream = evt.stream
				var id = remoteStream.getId()
				rtc.remoteStreams.push(remoteStream)
				addView(id)
				remoteStream.play("remote_video_" + id)
				Toast.info("stream-subscribed remote-uid: " + id)
				console.log("stream-subscribed remote-uid: ", id)
			})
			// Occurs when the remote stream is removed; for example, a peer user calls Client.unpublish.
			rtc.client.on("stream-removed", function(evt) {
				var remoteStream = evt.stream
				var id = remoteStream.getId()
				Toast.info("stream-removed uid: " + id)
				if (remoteStream.isPlaying()) {
					remoteStream.stop()
				}
				rtc.remoteStreams = rtc.remoteStreams.filter(function(stream) {
					return stream.getId() !== id
				})
				removeView(id)
				console.log("stream-removed remote-uid: ", id)
			})
			rtc.client.on("onTokenPrivilegeWillExpire", function() {
				// After requesting a new token
				// rtc.client.renewToken(token);
				Toast.info("onTokenPrivilegeWillExpire")
				console.log("onTokenPrivilegeWillExpire")
			})
			rtc.client.on("onTokenPrivilegeDidExpire", function() {
				// After requesting a new token
				// client.renewToken(token);
				Toast.info("onTokenPrivilegeDidExpire")
				console.log("onTokenPrivilegeDidExpire")
			})
		}

		/**
		 * rtc: rtc object
		 * option: {
		 *  mode: string, "live" | "rtc"
		 *  codec: string, "h264" | "vp8"
		 *  appID: string
		 *  channel: string, channel name
		 *  uid: number
		 *  token; string,
		 * }
		 **/
		function join(rtc, option) {
			if (rtc.joined) {

				Toast.error("Your already joined")
				return;
			}
			console.log(option);
			rtc.client = AgoraRTC.createClient({
				mode: option.mode,
				codec: option.codec
			})

			rtc.params = option

			// handle AgoraRTC client event
			handleEvents(rtc)

			// init client
			rtc.client.init(option.appID, function() {
				rtc.client.join(option.token ? option.token : null, option.channel, option.uid ? +option.uid : null, function(uid) {
					Toast.notice("join channel: " + option.channel + " success, uid: " + uid)
					console.log("join channel: " + option.channel + " success, uid: " + uid)
					rtc.joined = true

					rtc.params.uid = uid
					let twentyFourHours = 0;
					const display = $('#remainingTime');
					const price = $('#price');
					Timer(twentyFourHours, display, price);
					// create local stream
					rtc.localStream = AgoraRTC.createStream({
						streamID: rtc.params.uid,
						audio: true,
						video: true,
						screen: false,
						microphoneId: option.microphoneId,
						cameraId: option.cameraId
					})

					// initialize local stream. Callback function executed after intitialization is done
					rtc.localStream.init(function() {
						console.log("init local stream success")
						// play stream with html element id "local_stream"
						rtc.localStream.play("local_stream")

						// publish local stream
						publish(rtc)
					}, function(err) {
						Toast.error("stream init failed, please open console see more detail")
						console.error("init local stream failed ", err)
					})
				}, function(err) {
					Toast.error("client join failed, please open console see more detail")
					console.error("client join failed", err)
				})
			}, (err) => {
				Toast.error("client init failed, please open console see more detail")
				console.error(err)
			})
		}

		function publish(rtc) {
			if (!rtc.client) {
				Toast.error("Please Join Room First")
				return
			}
			if (rtc.published) {
				Toast.error("Your already published")
				return
			}
			var oldState = rtc.published

			// publish localStream
			rtc.client.publish(rtc.localStream, function(err) {
				rtc.published = oldState
				console.log("publish failed")
				Toast.error("publish failed")
				console.error(err)
			})
			Toast.info("publish")
			rtc.published = true
		}

		function unpublish(rtc) {
			if (!rtc.client) {
				Toast.error("Please Join Room First")
				return
			}
			if (!rtc.published) {
				Toast.error("Your didn't publish")
				return
			}
			var oldState = rtc.published
			rtc.client.unpublish(rtc.localStream, function(err) {
				rtc.published = oldState
				console.log("unpublish failed")
				Toast.error("unpublish failed")
				console.error(err)
			})
			Toast.info("unpublish")
			rtc.published = false
		}

		function leave(rtc) {
			if (!rtc.client) {
				Toast.error("Please Join First!")
				return
			}
			if (!rtc.joined) {
				Toast.error("You are not in channel")
				return
			}
			/**
			 * Leaves an AgoraRTC Channel
			 * This method enables a user to leave a channel.
			 **/
			rtc.client.leave(function() {
				// stop stream
				if (rtc.localStream.isPlaying()) {
					rtc.localStream.stop()
				}
				// close stream
				rtc.localStream.close()
				for (let i = 0; i < rtc.remoteStreams.length; i++) {
					var stream = rtc.remoteStreams.shift()
					var id = stream.getId()
					if (stream.isPlaying()) {
						stream.stop()
					}
					removeView(id)
				}
				rtc.localStream = null
				rtc.remoteStreams = []
				rtc.client = null
				console.log("client leaves channel success")
				rtc.published = false
				rtc.joined = false
				Toast.notice("leave success")
			}, function(err) {
				console.log("channel leave failed")
				Toast.error("leave success")
				console.error(err)
			})
		}

		// This function automatically executes when a document is ready.
		$(function() {
			getDevices(function(devices) {
				devices.audios.forEach(function(audio) {
					$("<option/>", {
						value: audio.value,
						text: audio.name,
					}).appendTo("#microphoneId")
				})
				devices.videos.forEach(function(video) {
					$("<option/>", {
						value: video.value,
						text: video.name,
					}).appendTo("#cameraId")
				})
				// To populate UI with different camera resolutions
				resolutions.forEach(function(resolution) {
					$("<option/>", {
						value: resolution.value,
						text: resolution.name
					}).appendTo("#cameraResolution")
				})
				M.AutoInit()
			})

			var fields = ["appID", "channel"]

			// This will start the join functions with all the configuration selected by the user.
			$("#join").on("click", function(e) {
				console.log("OOsamasasd")
				$("#section2").show();
				$("#footer-main").hide();
				$("#title-banner").hide();
				$(".video-conf").show();
				e.preventDefault();
				console.log(params);
				if (validator(params, fields)) {
					join(rtc, params)
				}
			})
			// This publishes the video feed to Agora
			$("#publish").on("click", function(e) {
				e.preventDefault()
				var params = serializeformData()
				if (validator(params, fields)) {
					publish(rtc)
				}
			});
			// Leeaves the chanenl if someone clicks the leave button
			$("#leave").on("click", function(e) {
				$("#imageMain").show();
				$("#title-banner").show();
				$(".video-conf").hide();
				leave(rtc)

				$.ajax({
					type: "POST",
					url: "time.php",
					// data:'name='+ document.getElementById("remainingTime").innerHTML+'time='+ document.getElementById("remainingTime").innerHTML,
					data: {
						timer: document.getElementById("remainingTime").innerHTML,
						username: document.getElementById("username").innerHTML,
						price: document.getElementById("price").innerHTML,

					},
					success: function() {

						console.log("this", document.getElementById("username"))
						// $("#show_message").fadeIn();
						Toast.notice("Session Time Added successfully")
						//$("#ajax-form").fadeOut();
					}
				});

			})
		})

		function Timer(duration, display, price) {

			let timer = duration,
				hours, minutes, seconds;

			let setIntervalId = setInterval(function() {
				hours = parseInt((timer / 3600) % 24, 10)
				minutes = parseInt((timer / 60) % 60, 10)
				seconds = parseInt(timer % 60, 10);

				hours = hours < 10 ? "0" + hours : hours;
				minutes = minutes < 10 ? "0" + minutes : minutes;
				seconds = seconds < 10 ? "0" + seconds : seconds;

				display.text(hours + ":" + minutes + ":" + seconds);
				price.text(timer * 0.0041)
					++timer;

				if (rtc.joined === false) {
					clearInterval(setIntervalId);
				}
			}, 1000);
		}

		function start() {
			// For testing purpose set the value to 10 seconds.
			let twentyFourHours = 60 * 60;
			const display = $('#remainingTime');


			Timer(twentyFourHours, display);
		}
	</script>



</body>

</html>