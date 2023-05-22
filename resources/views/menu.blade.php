<x-app-layout>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row gap-44">
			<div class="space-y-10 w-1/2">
				<h1 class="mt-24 text-white font-serif text-4xl font-bold leading-snug">
					Coffee
				</h1>
				<div class="grid grid-cols-3">
					<div class="flex flex-col justify-center w-fit">
						<img src="{{ asset('images/cappucino.png') }}" class="w-28">
						<h2 class="text-white text-center font-medium text-lg mt-4">Cappucino</h2>
						<span class="text-lg font-bold text-white text-center">15k</span>
					</div>
					<div class="flex flex-col justify-center w-fit">
						<img src="{{ asset('images/cappucino.png') }}" class="w-28">
						<h2 class="text-white text-center font-medium text-lg mt-4">Cappucino</h2>
						<span class="text-lg font-bold text-white text-center">15k</span>
					</div>
					<div class="flex flex-col justify-center w-fit">
						<img src="{{ asset('images/cappucino.png') }}" class="w-28">
						<h2 class="text-white text-center font-medium text-lg mt-4">Cappucino</h2>
						<span class="text-lg font-bold text-white text-center">15k</span>
					</div>
				</div>
			</div>

			<div class="space-y-10 w-1/2">
				<h1 class="mt-24 text-white font-serif text-4xl font-bold leading-snug">
					Snack
				</h1>
				<div class="grid grid-cols-3">
					<div class="flex flex-col justify-center w-fit">
						<img src="{{ asset('images/burger.png') }}" class="w-28">
						<h2 class="text-white text-center font-medium text-lg mt-4">Burger</h2>
						<span class="text-lg font-bold text-white text-center">15k</span>
					</div>
					<div class="flex flex-col justify-center w-fit">
						<img src="{{ asset('images/burger.png') }}" class="w-28">
						<h2 class="text-white text-center font-medium text-lg mt-4">Burger</h2>
						<span class="text-lg font-bold text-white text-center">15k</span>
					</div>
					<div class="flex flex-col justify-center w-fit">
						<img src="{{ asset('images/burger.png') }}" class="w-28">
						<h2 class="text-white text-center font-medium text-lg mt-4">Burger</h2>
						<span class="text-lg font-bold text-white text-center">15k</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>