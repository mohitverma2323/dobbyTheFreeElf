@extends('layouts.master')
@section('content')
<body class="index-4">
<section id="content">
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_5">
					<form id="contact-form">
							<header>
								<h2><span>Enter Details:</span></h2>
							</header>
							<fieldset>
									<label class="name">
										<span class="text">Your Name:</span>
										<input type="text" name="name" placeholder="" value="" data-constraints="@Required @JustLetters" />
									</label>
									<label class="email">
										<span class="text">Your E-mail:</span>
										<input type="text" name="email" placeholder="" value="" data-constraints="@Required @Email" />
									</label>
									<label class="phone">
										<span class="text">Contact Number:</span>
										<input type="text" name="phone" placeholder="" value="" data-constraints="@Required" />
									</label>
									<label class="message">
										<span class="text">Address for Document Pickup:</span>
										<textarea name="message" placeholder="" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
									</label>
								<div class="cont_btn">
									<a href="#" data-type="reset" class="btn">Clear</a>
									<a href="#" data-type="submit" class="btn">Submit</a>
								</div>
						</fieldset>
					</form>
				</div>
				<div class="grid_6 preffix_1">
					<div>
						<hader>
							<h2><span>Order Details</span></h2>
						</hader>
						<p class="el-1">
						{{$serviceRequested}} <br><br>	
                        Total Service Charges- <br><br>
						</p>
						<p class="el-2">
						Service Description Goes Here	
						</p>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
@endsection