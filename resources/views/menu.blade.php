<x-app-layout>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-32 flex flex-col items-center">
			<form id="form" class="flex flex-row gap-44 w-full" method="POST" action="{{ route('transaction.store') }}">
				@csrf
				{{-- Coffee Section --}}
				<div class="space-y-10 w-1/2">
					<h1 class="mt-24 text-white font-serif text-4xl font-bold leading-snug">
						Coffee
					</h1>
					<div class="grid grid-cols-3">
						@foreach ($coffee as $cf)
							<div class="flex flex-col justify-center w-fit items-center"
								x-data="{ jumlah: 0 }">
								{{-- Hidden Value --}}
								<input type="hidden" name="id[]" value={{ $cf->id }}>
								<input type="hidden" name="jumlah[]" x-model="jumlah">

								<img src="{{ asset('images/cappucino.png') }}" class="w-28">
								<h2 class="text-white text-center font-medium text-lg mt-4">{{ $cf->nama }}</h2>
								<span class="text-lg font-bold text-white text-center">Rp. {{ $cf->harga }}</span>
								<div class="bg-white rounded w-2/3 mt-4 flex justify-between">
									<button type="button" class="px-2 bg-yellow-100/95 rounded font-bold disabled:brightness-90"
										x-bind:disabled="jumlah < 1"
										x-on:click="jumlah = jumlah - 1">-</button>
									<span class="px-2" x-text="jumlah"></span>
									<button type="button" class="px-2 bg-yellow-100/95 rounded font-bold disabled:brightness-90"
										x-bind:disabled="jumlah >= 5"
										x-on:click="jumlah = jumlah + 1">+</button>
								</div>
							</div>
						@endforeach
					</div>
				</div>

				{{-- Snack Section --}}
				<div class="space-y-10 w-1/2">
					<h1 class="mt-24 text-white font-serif text-4xl font-bold leading-snug">
						Snack
					</h1>
					<div class="grid grid-cols-3">
						@foreach ($snack as $sc)
							<div class="flex flex-col justify-center w-fit items-center"
								x-data="{ jumlah: 0 }">
								{{-- Hidden Value --}}
								<input type="hidden" name="id[]" value={{ $sc->id }}>
								<input type="hidden" name="jumlah[]" x-model="jumlah">

								<img src="{{ asset('images/burger.png') }}" class="w-28">
								<h2 class="text-white text-center font-medium text-lg mt-4">{{ $sc->nama }}</h2>
								<span class="text-lg font-bold text-white text-center">Rp. {{ $sc->harga }}</span>
								<div class="bg-white rounded w-2/3 mt-4 flex justify-between">
									<button type="button" class="px-2 bg-yellow-100/95 rounded font-bold disabled:brightness-90"
										x-bind:disabled="jumlah < 1"
										x-on:click="jumlah = jumlah - 1">-</button>
									<span class="px-2" x-text="jumlah"></span>
									<button type="button" class="px-2 bg-yellow-100/95 rounded font-bold disabled:brightness-90"
										x-bind:disabled="jumlah >= 5"
										x-on:click="jumlah = jumlah + 1">+</button>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</form>
			<button type="submit" form="form" class="w-fit text-xl bg-yellow-100/95 text-stone-800 px-4 py-2 rounded hover:brightness-90 transition-all">Confirm Order</button>
		</div>
	</div>
</x-app-layout>