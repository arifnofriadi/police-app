@extends('components.master')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vehicles</li>
        </ol>
    </nav>

    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createVehicleModal">
                Add Vehicle
            </button>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">#</th>
                <th scope="col">License Plate</th>
                <th scope="col">Type</th>
                <th scope="col">Brand</th>
                <th scope="col">Color</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>B 067 JKT</td>
                <td>Mobile</td>
                <td>Honda</td>
                <td>Red</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#editVehicleModal">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>D 876 VB</td>
                <td>Motor</td>
                <td>BMW</td>
                <td>White Blue</td>
                <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="createVehicleModal" tabindex="-1" aria-labelledby="createVehicleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createVehicleModalLabel">Create New Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="createLicensePlate" class="form-label">License Plate</label>
                            <input type="text" class="form-control" id="createLicensePlate" required>
                        </div>
                        <div class="mb-3">
                            <label for="createType" class="form-label">Type</label>
                            <input type="text" class="form-control" id="createType" required>
                        </div>
                        <div class="mb-3">
                            <label for="createBrand" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="createBrand" required>
                        </div>
                        <div class="mb-3">
                            <label for="createColor" class="form-label">Color</label>
                            <input type="text" class="form-control" id="createColor" required>
                        </div>
                        <div class="mb-3">
                            <label for="createIsStolen" class="form-label">Is Stolen?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="is_stolen" id="createIsStolen"
                                    value="0">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="is_stolen" id="createIsStolen"
                                    value="1">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Vehicle</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editVehicleModal" tabindex="-1" aria-labelledby="editVehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editVehicleModalLabel">Edit Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editLicensePlate" class="form-label">License Plate</label>
                            <input type="text" class="form-control" id="editLicensePlate" value="B 067 JKT" required>
                        </div>
                        <div class="mb-3">
                            <label for="editType" class="form-label">Type</label>
                            <input type="text" class="form-control" id="editType" value="Mobile" required>
                        </div>
                        <div class="mb-3">
                            <label for="editBrand" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="editBrand" value="Honda" required>
                        </div>
                        <div class="mb-3">
                            <label for="editColor" class="form-label">Color</label>
                            <input type="text" class="form-control" id="editColor" value="Red" required>
                        </div>
                        <div class="mb-3">
                            <label for="createIsStolen" class="form-label">Is Stolen?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="is_stolen" id="createIsStolen"
                                    value="0">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="is_stolen" id="createIsStolen"
                                    value="1">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Vehicle</button>
                </div>
            </div>
        </div>
    </div>
@endsection
