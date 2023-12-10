<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    
    <div class="flex w-full">
    <div class="w-2/3">

<div class="px-4 sm:px-6 lg:px-8 mb-5">
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Location</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Category</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Start Date</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">End Date</th>
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                            <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($maps as $map)
                        <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $map->map_name }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $map->category }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $map->start_date }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $map->end_date }}</td>
                        <td>
                            <div wire:click="dto_edit({{ $map->id }})" class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-white bg-indigo-400 ring-gray-400/20 text-center cursor-pointer">Edit</div>
                        </td>
                        
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="5" class='pt-1'>{{ $maps->links() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
        <div class='w-1/3'>
            <div class="p-3">
                @if(session('success'))
                <div class="rounded-md bg-green-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ session('success')}}</p>
                        </div>
                        <div class="ml-auto pl-3">
                            <div class="-mx-1.5 -my-1.5">
                                <button type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <span>Map Locator Entry</span>
                <hr class='mb-4' />
                <form class='space-y-3'>
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Map Name</label>
                        <div class="mt-2">
                            <input wire:model="map_name" type="text" name="map_name" id="map_name" placeholder="Enter your Map name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('map_name')
                            <span class='text-red-900 text-xs'>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                        <div class="mt-2">
                            <input wire:model="category" type="text" name="category" id="category" placeholder="Select your category" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('category')
                            <span class='text-red-900 text-xs'>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--start date-->
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Start Date</label>
                        <div class="mt-2">
                            <input wire:model="start_date" ype="text" name="start_date" id="start_date" placeholder="dd/mm/yyyy" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('start_date')
                            <span class='text-red-900 text-xs'>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end date-->
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">End Date</label>
                        <div class="mt-2">
                            <input wire:model="end_date" type="text" name="end_date" id="end_date" placeholder="dd/mm/yyyy" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('end_date')
                            <span class='text-red-900 text-xs'>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    @error('geojson')
                    <span class='text-red-900 text-xs'>{{ $message }}</span>
                    @enderror
                    <input wire:model="geojson" type="hidden" name="geojson" id="geojson">
                    <input wire:model="center_lat" type="hidden" name="center_lat" id="geojson">
                    <input wire:model="center_lng" type="hidden" name="center_lng" id="geojson">
                    <input wire:model="map_zoom" type="hidden" name="map_zoom" id="geojson">

                    <div>
                        <button wire:click.prevent="createMap({{ $map_id }})" class="bg-green-800 text-white py-1 px-3 text-sm rounded-full my-4">{{ $buttonUpsert }}</button>
                        <button wire:click.prevent="dto_create" class="bg-green-800 text-white py-1 px-3 text-sm rounded-full my-4">Refresh</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var map = L.map('map').setView([{{ $center_lat }}, {{ $center_lng }}], {{ $map_zoom }});
    var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });
    osm.addTo(map);
    document.addEventListener('livewire:initialized', function() {
        let component = @this;
        let mapsServer = @js($maps);
      
        var drawnItems = new L.FeatureGroup();
        mapsServer.data.map((row) => {

            L.geoJSON(row.geojson, {
                onEachFeature: function(feature, layer) {

                    layer.bindPopup('<div><b>' + row.map_name + '</b></div><div>' + row.category + '</div>');
                    layer.feature.properties.id = row.id;
                    drawnItems.addLayer(layer);
                }
            });

        });
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: drawnItems,
                remove: false,
            },
            draw: {
                marker: false,
                polyline: false,
                rectangle: false,
                circle: false,
            },
        });
        map.addControl(drawControl);
        
        map.on("draw:created", function(e) {
            var type = e.layerType;
            var layer = e.layer;
            zoom_init(e);
            component.set('geojson', JSON.stringify(layer.toGeoJSON())); //.set('geoJsonProperties',  JSON.stringify(layer.toGeoJSON()) );
            drawnItems.addLayer(layer);
        });
       
        map.on('zoomend', function(e) {
            zoom_init(e);
        });

        map.on("draw:edited", function(e) {
            var layers = e.layers;
            zoom_init(e);
            layers.eachLayer((layer) => {
                component.update(layer.toGeoJSON());
            })
        });

        let zoom_init = (e) => {
            center = map.getCenter();
            component.set('map_zoom', e.sourceTarget._zoom);
            component.set('center_lng', center.lng);
            component.set('center_lat', center.lat);
            console.log(e.sourceTarget._zoom, center.lng, center.lat);
        }
    })
</script>
