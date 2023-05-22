<x-app-layout>
	<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center space-y-10">
				<h1 class="mt-10 text-center text-white font-serif text-4xl font-bold leading-snug">
					Detail Transaksi
				</h1>
				<div class="bg-white overflow-hidden shadow-sm rounded-lg">
					<div class="py-6 px-3 text-gray-900">

							<table class="w-full text-lg text-left text-gray-500 dark:text-gray-400">
									<thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
											<tr>
													<th scope="col" class="px-6 py-3 rounded-l-lg">
															Nama
													</th>
													<th scope="col" class="px-6 py-3">
															Jumlah
													</th>
													<th scope="col" class="px-6 py-3">
															Harga Satuan
													</th>
													<th scope="col" class="px-6 py-3 rounded-r-lg">
															Total Harga
													</th>
											</tr>
									</thead>
									<tbody>
											@foreach ($transaction->transaction_details as $td)
												<tr class="bg-white dark:bg-gray-800">
														<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
																{{ $td->menu->nama }}
														</th>
														<td class="px-6 py-4 text-center">
																{{ $td->jumlah }}
														</td>
														<td class="px-6 py-4">
																Rp. {{ $td->menu->harga }}
														</td>
														<td class="px-6 py-4">
																Rp. {{ $td->total }}
														</td>
												</tr>
											@endforeach
									</tbody>
									<tfoot>
											<tr class="font-semibold text-gray-900 dark:text-white">
													<th scope="row" class="px-6 py-3 text-base">Total</th>
													<td class="px-6 py-3 text-center">{{ $transaction->total }}</td>
													<td></td>
													<td class="px-6 py-3">Rp. {{ $transaction->total_harga }}</td>
											</tr>
									</tfoot>
							</table>

							@if ($transaction->paid)
								<p class="px-6 py-8 text-gray-500 text-center mt-4 text-lg">Sudah dibayar.</p>
							@else
								<p class="px-6 py-8 text-gray-500 text-center mt-4 text-lg">Belum dibayar.</p>
							@endif

					</div>
				</div>
				@if ($transaction->paid)
					<a href="{{ route('home') }}" class="text-xl bg-yellow-100/95 text-stone-800 px-4 py-2 rounded hover:brightness-90 transition-all">Kembali ke home</a>
				@else
					<form method="POST" action="{{ route('transaction.update', $transaction->id) }}">
						@csrf
						@method('PUT')
						<button type="submit" class="text-xl bg-yellow-100/95 text-stone-800 px-4 py-2 rounded hover:brightness-90 transition-all">Process Transaction</button>
					</form>
				@endif
			</div>
	</div>
</x-app-layout>