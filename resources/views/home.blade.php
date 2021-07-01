@extends('layouts.app')

@section('content')
<div class="container1 bg-gray-800 text-gray-100 px-8 py-12">
    <div class="form-wrapper ">
        <form action="{{ route('insert_form') }}" method="post">
            @csrf
            <div class="text-center w-full">
                <h3 class="lg:text-5xl font-bold ">Trans Global Shipping Lines PTE LTD</h3>
            </div>
            <div class="bg-gray-100 mt-8 text-gray-900 rounded-lg shadow-lg px-8  md:px-12 lg:px-16 xl:px-12 py-16">

                <div class="mt-14">
                    <h2 class="mb-3 text-4xl lg:text-5xl font-bold leading-tight">Invoice</h2>
                    <!-- <div class="text-gray-700 mt-4 mb-8">
                        Hate forms? Send us an <span class="underline">email</span> instead.
                    </div> -->
                </div>

                <div class="max-w-screen-xl  grid gap-8 grid-cols-1 md:grid-cols-2  mx-auto ">
                    <div class=" ">
                        <div>
                            <span class="uppercase text-sm text-gray-600 font-bold">Shipper/exporter(Name & Address)</span>
                            <textarea name="shipper_name" class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Booking No</span>
                            <input  name="booking_no" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Bill of Ladding No</span>
                            <input name="bill_laddingno" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Notify(Name & Adress)</span>
                            <input name="notify_name" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                    </div>
                    <div class="">
                        <div>
                            <span class="uppercase text-sm text-gray-600 font-bold">Consignee(Name & Address)</span>
                            <textarea name="consignee_name" class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                            <span class="hint">(B/L Not Negotiable unless consigned to order)</span>
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Forwarding Agent F.M.C No</span>
                            <input name="fmc_no" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Point and Country of Origin (For Merchan's Reference Only)</span>
                            <input name="point_country" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Remarks/Export PR other Instructions</span>
                            <input name="pr_instruction" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                    </div>
                </div>


                <!-- part 2 -->
                <h3 class="mt-8 mb-4 text-2xl font-bold">For Defenition See Clouse 2 Overleaf</h3>
                <div class="max-w-screen-xl  grid gap-8 grid-cols-1 md:grid-cols-2  mx-auto ">
                    <div class="column">
                        <div>
                            <span class="uppercase text-sm text-gray-600 font-bold">Initial Carriage By(Model)</span>
                            <input name="carriage_model" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Loading Vessel </span>
                            <input name="vessel" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Port of Destination</span>
                            <input name="destination" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Further Routing (At Merchant's Expense Risk Responsibility)</span>
                            <input name="routing" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                    </div>
                    <div class="column">
                        <div>
                            <span class="uppercase text-sm text-gray-600 font-bold">Place of Receipt Of Goods (If Contracted For)</span>
                            <input name="goods_receipt"  class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Por of Loading</span>
                            <input name="port_loading" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                        <div class="mt-4">
                            <span class="uppercase text-sm text-gray-600 font-bold">Final Destination (if contracted for)</span>
                            <input name="destination" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text">
                        </div>
                    </div>
                </div>

                <!-- part 3 -->
                <h3 class="mt-8 mb-4 text-2xl font-bold">Particulers As Furnished By Shipper</h3>
                <table class="no-border text-left w-full" cellpadding="5">
                    <thead>
                        <th>MKS & NOS / CONT.NOS</th>
                        <th>Description and Goods</th>
                        <th>Weight</th>
                        <th>Measurement</th>
                    </thead>
                    <tbody>
                        <td>
                            <input type="text" name="mks_nos" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
                        </td>
                        <td>
                            <input type="text" name="description" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
                        </td>
                        <td>
                            <input type="text" name="weight" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
                        </td>
                        <td>
                            <input type="text" name="measurement" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
                        </td>
                        <td class="action_buttons">
                            <button class="add_product">Add</button>
                        </td>
                    </tbody>
                    <tfoot>
                        <td class="text-right" colspan="3">
                            <h3>Total</h3>
                        </td>
                        <td class="text-right" colspan="5">
                            <input placeholder="" type="text" disabled="disabled" class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
                        </td>
                    </tfoot>
                </table>
                <div class="mt-4">
                    <button class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full max focus:outline-none focus:shadow-outline">
                        Submit
                    </button>
                </div>
            </div>
        </form>

        <a href="{{ route('viewreport') }}" class="btn btn-success">View Reports</a>
    </div>
</div>

<style>
    body #app main {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
</style>
@endsection

