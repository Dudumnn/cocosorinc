<div class="fixed z-50 inset-0">
  <div class="bg-gray-900 opacity-40 fixed inset-0">

  </div>
  <div class="bg-white rounded-lg m-auto fixed inset-0 p-6 max-w-2xl h-60 flex items-center">
    <form action="/OutputImport" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="file">
      <br>
      <button type="submit">Import</button>

    </form>
  </div>

</div>