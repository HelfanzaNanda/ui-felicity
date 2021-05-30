@extends('layouts.app')
@section('content')
	@include('layouts.__navigation_light')

	<section class="bg-white w-full overflow-x-hidden py-20 md:py-32">
		<div class="mx-4 md:mx-36">
			<div class="mb-24">
				<div class="mb-3 md:mb-10 font-semibold text-3xl md:font--size-65">Press Release</div>
				<div class="text-base text-gray-400 md:font--size-17">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			@for ($i = 0; $i < 4; $i++)
				<div class="mb-10 md:mb-24">
					<div class="block md:flex justify-between mb-3 md:mb-0">
						<div class="mb-0 md:mb-3 font-semibold text-2xl md:font--size-27">Team Spirit makes work better</div>
						<div class="text-sm text-gray-500 md:font--size-16">26 th January 2020 | 5:45PM</div>
					</div>
					<div class="text-gray-500 mb-5 text--typography md:font--size-17">A world where anyone can belong anywhere starts with a workplace where you feel welcome and can contribute your best work. Airbnb welcomes candidates with backgrounds that are traditionally underrepresented in tech and offers opportunities to create community in our offices around the world.</div>
					<hr>
				</div>
			@endfor
		</div>
	</section>
@endsection