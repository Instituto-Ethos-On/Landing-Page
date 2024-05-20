<form action="{{$slot}}">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
      <input type="text" name="search" class="h-14 w-full px-5 rounded-lg z-0 focus:shadow focus:outline-none"
        placeholder="Pesquisar..." />
      <div class="absolute top-2 right-2">
        <button type="submit" class="w-fit h-fit px-3 py-2 rounded-lg bg-teal-500 hover:bg-teal-600">
          <i class="fa-solid fa-magnifying-glass text-white"></i>
        </button>
      </div>
    </div>
  </form>