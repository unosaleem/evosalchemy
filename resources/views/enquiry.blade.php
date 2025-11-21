@extends('layouts.master')

@section('content')
    <div class="max-w-7xl mx-auto py-8">

        <h2 class="text-3xl font-bold mb-6">All Enquiries</h2>

        <!-- DATE FILTER -->
        <form method="GET" action="{{ route('enquiry.index') }}" class="flex gap-4 mb-6">
            <div>
                <label>From</label>
                <input type="date" name="from" value="{{ $from }}" class="border p-2 rounded">
            </div>
            <div>
                <label>To</label>
                <input type="date" name="to" value="{{ $to }}" class="border p-2 rounded">
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded mt-6">Filter</button>
        </form>

        <!-- SEARCH -->
        <input type="text" id="searchBox" placeholder="Search..."
               class="border p-2 w-full mb-4 rounded" />

        <!-- TABLE -->
        <div class="overflow-auto bg-white shadow rounded">
            <table class="w-full text-left" id="leadTable">
                <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 cursor-pointer" data-sort="id">ID ⬍</th>
                    <th class="p-3 cursor-pointer" data-sort="name">Name ⬍</th>
                    <th class="p-3 cursor-pointer" data-sort="mobile">Mobile ⬍</th>
                    <th class="p-3 cursor-pointer" data-sort="email">Email ⬍</th>
                    <th class="p-3 cursor-pointer" data-sort="city">City ⬍</th>
                    <th class="p-3 cursor-pointer" data-sort="remark">Remark ⬍</th>
                    <th class="p-3 cursor-pointer" data-sort="date">Date ⬍</th>
                </tr>
                </thead>
                <tbody id="leadBody">
                @foreach($leads as $lead)
                    <tr class="border-b">
                        <td class="p-3">{{ $lead->id }}</td>
                        <td class="p-3">{{ $lead->name }}</td>
                        <td class="p-3">{{ $lead->mobile }}</td>
                        <td class="p-3">{{ $lead->email }}</td>
                        <td class="p-3">{{ $lead->city }}</td>
                        <td class="p-3">{{ $lead->remark }}</td>
                        <td class="p-3">{{ $lead->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        /* -----------------------------
              SIMPLE SEARCH FILTER
        ----------------------------- */
        document.getElementById("searchBox").addEventListener("keyup", function () {
            let value = this.value.toLowerCase();
            document.querySelectorAll("#leadBody tr").forEach(function (row) {
                row.style.display = row.innerText.toLowerCase().includes(value) ? "" : "none";
            });
        });


        /* -----------------------------
              SORTING FUNCTION
        ----------------------------- */
        document.querySelectorAll("th[data-sort]").forEach(header => {
            header.addEventListener("click", () => {
                const table = header.closest("table");
                const tbody = table.querySelector("tbody");
                const index = Array.from(header.parentNode.children).indexOf(header);
                const rows = Array.from(tbody.querySelectorAll("tr"));
                const ascending = header.classList.toggle("asc");

                rows.sort((a, b) => {
                    let valA = a.children[index].innerText.trim().toLowerCase();
                    let valB = b.children[index].innerText.trim().toLowerCase();

                    let numberA = parseFloat(valA);
                    let numberB = parseFloat(valB);

                    if (!isNaN(numberA) && !isNaN(numberB)) {
                        return ascending ? numberA - numberB : numberB - numberA;
                    }

                    return ascending ? valA.localeCompare(valB) : valB.localeCompare(valA);
                });

                rows.forEach(row => tbody.appendChild(row));
            });
        });
    </script>
@endpush
