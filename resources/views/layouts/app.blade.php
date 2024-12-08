<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased flex flex-col h-screen w-full">

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header>
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow h-full w-full flex flex-col relative">
                {{ $slot }}
            </main>

    </body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    async function handleDeleteProduct(productId, productName) {

  const result = await Swal.fire({
  title: "Are you sure?",
  text: `You will be deleting the product ${productName}`,
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#F68A21",
  cancelButtonColor: "#0F172A",
  confirmButtonText: "Yes, delete it!"
})
  if (result.isConfirmed) {
    const response = await fetch(`/product/delete/${productId}`, {
        method: 'DELETE',
        headers: {
         'X-CSRF-TOKEN': '{{ csrf_token() }}',
         'Content-Type': 'application/json',
       },
    });
    const data = await response.json();
    await Swal.fire({
      title: "Deleted!",
      text: data.message,
      icon: "success"
    });
    window.location.reload();

  }
    }

async function handleModalPopUp() {
    Swal.fire({
  title: "Good job!",
  text: "You updated the product successfully",
  icon: "success"
});
}


</script>
</html>
