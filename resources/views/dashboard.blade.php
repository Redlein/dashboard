
@extends('layouts.main')

@section('content')

<div class="padding-md">

    <ul class="breadcrumb">
        @if(count(Request::segments()) == 1)
            <li class="active"><i class="fa fa-home"></i> Dashboard</li>
        @else
            <li class="active">
                <a href="{{ route('dashboard')}}"><i class="fa fa-home"></i> Dashboard</a>
            </li>
        @endif
        <?php $breadcrumb_url = ''; ?>
        @for($i = 1; $i <= count(Request::segments()); $i++)
            <?php $breadcrumb_url .= '/' . Request::segment($i); ?>
            @if(Request::segment($i) != ltrim(route('dashboard', [], false), '/') && !is_numeric(Request::segment($i)))

                @if($i < count(Request::segments()) & $i > 0)
                    <li class="active"><a
                                href="{{ $breadcrumb_url }}">{{ ucwords(str_replace('-', ' ', str_replace('_', ' ', Request::segment($i)))) }}</a>
                    </li>
                @else
                    <li>{{ ucwords(str_replace('-', ' ', str_replace('_', ' ', Request::segment($i)))) }}</li>
                @endif

            @endif
        @endfor
    </ul>
	<div class="page-title">
		Dashboard
	</div>
	<div class="page-sub-header">
		Welcome Back, John Doe , <i class="fa fa-map-marker text-danger"></i> London
	</div>

	<div class="row m-top-md">
		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-danger m-bottom-md">
					<div class="statistic-value">
						Item 1
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-eye"></i>
					</div>		
				</div>
			</a>
		</div>

		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-info m-bottom-md">
					<div class="statistic-value">
						Item 2
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-ios-cart"></i>
					</div>
				</div>
			</a>
		</div>

		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-purple m-bottom-md">
					<div class="statistic-value">
						Item 3
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-person-add"></i>
					</div>
				</div>
			</a>
		</div>

		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-success m-bottom-md">
					<div class="statistic-value">
						Item 4
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-stats-bars"></i>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row m-top-md">
		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-danger m-bottom-md">
					<div class="statistic-value">
						Item 1
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-eye"></i>
					</div>		
				</div>
			</a>
		</div>

		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-info m-bottom-md">
					<div class="statistic-value">
						Item 2
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-ios-cart"></i>
					</div>
				</div>
			</a>
		</div>

		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-purple m-bottom-md">
					<div class="statistic-value">
						Item 3
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-person-add"></i>
					</div>
				</div>
			</a>
		</div>

		<div class="col-lg-3 col-sm-6">
			<a href="#">
				<div class="statistic-box bg-success m-bottom-md">
					<div class="statistic-value">
						Item 4
					</div>

					<div class="m-top-md">Pequeña descripción del Item</div>

					<div class="statistic-icon-background">
						<i class="ion-stats-bars"></i>
					</div>
				</div>
			</a>
		</div>
	</div>
		

</div><!-- ./padding-md -->

@endsection