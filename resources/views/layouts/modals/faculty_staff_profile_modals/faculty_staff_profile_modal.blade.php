<div class="modal fade" id="AddEducationalAttainmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Faculty profile by educational attainment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="educational-attainment-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="school_year" class="form-label">School Year</label>
                    <select class="form-select" id="school_year" name="school_year" required>
                        <option selected @readonly(true) value="{{ $defaultAcademicYears->school_year }}">{{ $defaultAcademicYears->school_year }}</option>
                        @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->year_start.'-'.$academicYear->year_end }}">{{ $academicYear->year_start.'-'.$academicYear->year_end  }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="semester" name="semester" required>
                        <option selected @readonly(true) value="{{ $defaultAcademicYears->semester }}">{{ $defaultAcademicYears->semester }}</option>
                        <option value="1st Semester">1st</option>
                        <option value="2nd Semester">2nd</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
               
                <div class="col-md-12">
                    <label for="education" class="form-label">Educational Attainment</label>
                    <select class="form-select" id="education" name="education" required>
                        <option selected disabled value="">Select Type</option>
                        @foreach ($educationAttainmentType as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
               
                <div class="col-md-12">
                    <label for="number_of_faculty" class="form-label">Number of Faculty</label>
                    <input type="number" class="form-control" id="number_of_faculty" name="number_of_faculty" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-educational-attainment-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditEducationalAttainmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Faculty profile by educational attainment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-educational-attainment-form" novalidate>
                @csrf

                <div class="col-md-12">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="view_semester" name="semester" required>
                        <option selected disabled value="">Select Semester</option>
                        <option value="1st Semester">1st</option>
                        <option value="2nd Semester">2nd</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="school_year" class="form-label">School Year</label>
                    <select class="form-select" id="view_school_year" name="school_year" required>
                        <option selected disabled value="">Select Academic Year</option>
                        @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->year_start.'-'.$academicYear->year_end }}">{{ $academicYear->year_start.'-'.$academicYear->year_end  }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="education" class="form-label">Educational Attainment</label>
                    <select class="form-select" id="view_education" name="education" required>
                        <option selected disabled value="">Select Type</option>
                        @foreach ($educationAttainmentType as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                

                <div class="col-md-12">
                    <label for="number_of_faculty" class="form-label">Number of Faculty</label>
                    <input type="number" class="form-control" id="view_number_of_faculty" name="number_of_faculty" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-educational-attainment-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddNatureAppointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Faculty profile by nature of appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="nature-appointment-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="education" class="form-label">Nature of Appointment</label>
                    <select class="form-select" id="nop_apointment_nature" name="apointment_nature" required>
                        <option selected disabled value="">Select Type</option>
                        @foreach ($appointments as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="nop_semester" name="semester" required>
                        <option selected @readonly(true) value="{{ $defaultAcademicYears->semester }}">{{ $defaultAcademicYears->semester }}</option>
                        <option value="1st Semester">1st</option>
                        <option value="2nd Semester">2nd</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="nop_school_year" class="form-label">School Year</label>
                    <select class="form-select" id="nop_school_year" name="school_year" required>
                        <option selected @readonly(true) value="{{ $defaultAcademicYears->school_year }}">{{ $defaultAcademicYears->school_year }}</option>
                        @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->year_start.'-'.$academicYear->year_end }}">{{ $academicYear->year_start.'-'.$academicYear->year_end  }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            

                <div class="col-md-12">
                    <label for="number_of_faculty" class="form-label">Number of Faculty</label>
                    <input type="number" class="form-control" id="nop_number_of_faculty" name="number_of_faculty" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-nature-appointment-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditNatureAppointmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Update Faculty profile by nature of appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-nature-appointment-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="education" class="form-label">Nature of Appointment</label>
                    <select class="form-select" id="view_nop_apointment_nature" name="apointment_nature" required>
                        <option selected disabled value="">Select Type</option>
                        @foreach ($appointments as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="view_nop_semester" name="semester" required>
                        <option selected disabled value="">Select Semester</option>
                        <option value="1st Semester">1st</option>
                        <option value="2nd Semester">2nd</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="nop_school_year" class="form-label">School Year</label>
                    <select class="form-select" id="view_nop_school_year" name="school_year" required>
                        <option selected disabled value="">Select Academic Year</option>
                        @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->year_start.'-'.$academicYear->year_end }}">{{ $academicYear->year_start.'-'.$academicYear->year_end  }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="number_of_faculty" class="form-label">Number of Faculty</label>
                    <input type="number" class="form-control" id="view_nop_number_of_faculty" name="number_of_faculty" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-nature-appointment-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddAcademicRankModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Faculty profile by academic rank</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="academic-rank-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="education" class="form-label">Academic Rank</label>
                    <select class="form-select" id="ar_academic_rank" name="academic_rank" required>
                        <option selected disabled value="">Select Type</option>
                        @foreach ($academicRanks as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="ar_semester" name="semester" required>
                        <option selected @readonly(true) value="{{ $defaultAcademicYears->semester }}">{{ $defaultAcademicYears->semester }}</option>
                        <option value="1st Semester">1st</option>
                        <option value="2nd Semester">2nd</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="ar_school_year" class="form-label">School Year</label>
                    <select class="form-select" id="ar_school_year" name="school_year" required>
                        <option selected @readonly(true) value="{{ $defaultAcademicYears->school_year }}">{{ $defaultAcademicYears->school_year }}</option>
                        @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->year_start.'-'.$academicYear->year_end }}">{{ $academicYear->year_start.'-'.$academicYear->year_end  }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="number_of_faculty" class="form-label">Number of Faculty</label>
                    <input type="number" class="form-control" id="ar_number_of_faculty" name="number_of_faculty" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-academic-rank-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditAcademicRankModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Update Faculty profile by academic rank</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-academic-rank-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="education" class="form-label">Academic Rank</label>
                    <select class="form-select" id="view_ar_academic_rank" name="academic_rank" required>
                        <option selected disabled value="">Select Type</option>
                        @foreach ($academicRanks as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="semester" class="form-label">Semester</label>
                    <select class="form-select" id="view_ar_semester" name="semester" required>
                        <option selected disabled value="">Select Semester</option>
                        <option value="1st Semester">1st</option>
                        <option value="2nd Semester">2nd</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="ar_school_year" class="form-label">School Year</label>
                    <select class="form-select" id="view_ar_school_year" name="school_year" required>
                        <option selected disabled value="">Select Academic Year</option>
                        @foreach ($academicYears as $academicYear)
                        <option value="{{ $academicYear->year_start.'-'.$academicYear->year_end }}">{{ $academicYear->year_start.'-'.$academicYear->year_end  }}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="number_of_faculty" class="form-label">Number of Faculty</label>
                    <input type="number" class="form-control" id="view_ar_number_of_faculty" name="number_of_faculty" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-academic-rank-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddFacultyScholarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"> List of faculty scholars</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="faculty-scholar-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="faculty_name" class="form-label">Name of Faculty</label>
                    <input type="text" class="form-control" id="fs_faculty_name" name="faculty_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="sholarship" class="form-label">Scholarship</label>
                    <input type="text" class="form-control" id="fs_scholarship" name="scholarship" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="institution" class="form-label">Institution</label>
                    <input type="text" class="form-control" id="fs_institution" name="institution" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="program" class="form-label">Program</label>
                    <input type="text" class="form-control" id="fs_program" name="program" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-faculty-scholar-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditFacultyScholarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Update List of faculty scholars</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-faculty-scholar-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="faculty_name" class="form-label">Name of Faculty</label>
                    <input type="text" class="form-control" id="view_fs_faculty_name" name="faculty_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="sholarship" class="form-label">Scholarship</label>
                    <input type="text" class="form-control" id="view_fs_scholarship" name="scholarship" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="institution" class="form-label">Institution</label>
                    <input type="text" class="form-control" id="view_fs_institution" name="institution" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="program" class="form-label">Program</label>
                    <input type="text" class="form-control" id="view_fs_program" name="program" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-faculty-scholar-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddFacultyGraduateStudiesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of faculty Members who completed their Graduated Studies </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="faculty-graduate-studies-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="faculty_name" class="form-label">Name of Faculty</label>
                    <input type="text" class="form-control" id="fgs_faculty_name" name="faculty_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="sholarship" class="form-label">Degree</label>
                    <input type="text" class="form-control" id="fgs_degree" name="degree" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="institution" class="form-label">Institution</label>
                    <input type="text" class="form-control" id="fgs_institution" name="institution" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="program" class="form-label">Date of Graduation</label>
                    <input type="date" class="form-control" id="fgs_date_of_graduation" name="date_of_graduation" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-faculty-graduate-studies-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditFacultyGraduateStudiesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of faculty Members who completed their Graduated Studies </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-faculty-graduate-studies-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="faculty_name" class="form-label">Name of Faculty</label>
                    <input type="text" class="form-control" id="view_fgs_faculty_name" name="faculty_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="sholarship" class="form-label">Degree</label>
                    <input type="text" class="form-control" id="view_fgs_degree" name="degree" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="institution" class="form-label">Institution</label>
                    <input type="text" class="form-control" id="view_fgs_institution" name="institution" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="program" class="form-label">Date of Graduation</label>
                    <input type="date" class="form-control" id="view_fgs_date_of_graduation" name="date_of_graduation" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-faculty-graduate-studies-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddSeminarTrainingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of seminars and trainings attended by faculty members</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="seminar-training-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Seminar Category</label>
                    <select class="form-select" id="st_seminar_category" name="seminar_category" required>
                        <option selected disabled value="">Select Category</option>
                        <option value="Local">Local</option>
                        <option value="Provincial">Provincial</option>
                        <option value="Regional">Regional</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Title of Conference / Seminar</label>
                    <input type="text" class="form-control" id="st_conference_title" name="conference_title" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="participants" class="form-label">Participants</label>
                    <input type="text" class="form-control" id="st_participants" name="participants" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="st_date" name="date" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Venue</label>
                    <input type="text" class="form-control" id="st_venue" name="venue" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Sponsoring Agency</label>
                    <input type="text" class="form-control" id="st_sponsoring_agency" name="sponsoring_agency" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-seminar-training-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditSeminarTrainingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of seminars and trainings attended by faculty members</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-seminar-training-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Seminar Category</label>
                    <select class="form-select" id="view_st_seminar_category" name="seminar_category" required>
                        <option selected disabled value="">Select Category</option>
                        <option value="Local">Local</option>
                        <option value="Provincial">Provincial</option>
                        <option value="Regional">Regional</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Title of Conference / Seminar</label>
                    <input type="text" class="form-control" id="view_st_conference_title" name="conference_title" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="participants" class="form-label">Participants</label>
                    <input type="text" class="form-control" id="view_st_participants" name="participants" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="view_st_date" name="date" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Venue</label>
                    <input type="text" class="form-control" id="view_st_venue" name="venue" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Sponsoring Agency</label>
                    <input type="text" class="form-control" id="view_st_sponsoring_agency" name="sponsoring_agency" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-seminar-training-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddRecognitionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of recognition and award received by the faculty members  </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="recognition-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Seminar Category</label>
                    <select class="form-select" id="ra_award_type" name="award_type" required>
                        <option selected disabled value="">Select Category</option>
                        <option value="Local">Local</option>
                        <option value="Provincial">Provincial</option>
                        <option value="Regional">Regional</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Name of awardee</label>
                    <input type="text" class="form-control" id="ra_awardee_name" name="awardee_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="participants" class="form-label">Award / Recognition</label>
                    <input type="text" class="form-control" id="ra_award" name="award" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Granting Agency / Institution</label>
                    <input type="text" class="form-control" id="ra_agency" name="agency" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Event</label>
                    <input type="text" class="form-control" id="ra_event" name="event" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>


                <div class="col-md-12">
                    <label for="date" class="form-label">Date Received</label>
                    <input type="date" class="form-control" id="ra_date_received" name="date_received" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-recognition-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditRecognitionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Update List of recognition and award received by the faculty members  </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-recognition-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Seminar Category</label>
                    <select class="form-select" id="view_ra_award_type" name="award_type" required>
                        <option selected disabled value="">Select Category</option>
                        <option value="Local">Local</option>
                        <option value="Provincial">Provincial</option>
                        <option value="Regional">Regional</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Name of awardee</label>
                    <input type="text" class="form-control" id="view_ra_awardee_name" name="awardee_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="participants" class="form-label">Award / Recognition</label>
                    <input type="text" class="form-control" id="view_ra_award" name="award" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Granting Agency / Institution</label>
                    <input type="text" class="form-control" id="view_ra_agency" name="agency" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Event</label>
                    <input type="text" class="form-control" id="view_ra_event" name="event" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Date Received</label>
                    <input type="date" class="form-control" id="view_ra_date_received" name="date_received" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-recognition-btn">Update</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="AddPresentation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of paper presentations of the faculty members</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="presentation-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Type</label>
                    <select class="form-select" id="pp_presentation_type" name="presentation_type" required>
                        <option selected disabled value="">Select Type</option>
                        <option value="Local">Local</option>
                        <option value="Provincial">Provincial</option>
                        <option value="Regional">Regional</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="conference_name" class="form-label">Title of Conference</label>
                    <input type="text" class="form-control" id="pp_conference_name" name="conference_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="participants" class="form-label">Title of paper</label>
                    <input type="text" class="form-control" id="pp_paper_name" name="paper_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Presenter</label>
                    <input type="text" class="form-control" id="pp_presenter_name" name="presenter_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="pp_date" name="date" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Venue</label>
                    <input type="text" class="form-control" id="pp_venue" name="venue" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="submit-presentation-btn">Submit</button>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="EditPresentation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">List of paper presentations of the faculty members</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 needs-validation" id="view-presentation-form" novalidate>
                @csrf
                <div class="col-md-12">
                    <label for="conference_title" class="form-label">Type</label>
                    <select class="form-select" id="view_pp_presentation_type" name="presentation_type" required>
                        <option selected disabled value="">Select Type</option>
                        <option value="Local">Local</option>
                        <option value="Provincial">Provincial</option>
                        <option value="Regional">Regional</option>
                        <option value="National">National</option>
                        <option value="International">International</option>
                    </select>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="conference_name" class="form-label">Title of Conference</label>
                    <input type="text" class="form-control" id="view_pp_conference_name" name="conference_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label for="participants" class="form-label">Title of paper</label>
                    <input type="text" class="form-control" id="view_pp_paper_name" name="paper_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="venue" class="form-label">Presenter</label>
                    <input type="text" class="form-control" id="view_pp_presenter_name" name="presenter_name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="view_pp_date" name="date" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="date" class="form-label">Venue</label>
                    <input type="text" class="form-control" id="view_pp_venue" name="venue" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm px-3" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-sm px-3" id="update-presentation-btn">Submit</button>
        </div>
      </div>
    </div>
</div>


<script>
    // FOR RESET VALIDATION FOR MULTIPLE FORMS :D
    document.addEventListener("DOMContentLoaded", function () {
        const formModalPairs = [
            // Educational Attainment
            { formId: "educational-attainment-form", modalId: "AddEducationalAttainmentModal" },
            { formId: "educational-attainment-form", modalId: "EditEducationalAttainmentModal" },
            { formId: "view-educational-attainment-form", modalId: "AddEducationalAttainmentModal" },
            { formId: "view-educational-attainment-form", modalId: "EditEducationalAttainmentModal" },
            
            // Nature Appointment
            { formId: "nature-appointment-form", modalId: "AddNatureAppointmentModal" },
            { formId: "nature-appointment-form", modalId: "EditNatureAppointmentModal" },
            { formId: "view-nature-appointment-form", modalId: "AddNatureAppointmentModal" },
            { formId: "view-nature-appointment-form", modalId: "EditNatureAppointmentModal" },
            
            // Academic Rank
            { formId: "academic-rank-form", modalId: "AddAcademicRankModal" },
            { formId: "academic-rank-form", modalId: "EditAcademicRankModal" },
            { formId: "view-academic-rank-form", modalId: "AddAcademicRankModal" },
            { formId: "view-academic-rank-form", modalId: "EditAcademicRankModal" },
            
            // Faculty Scholar
            { formId: "faculty-scholar-form", modalId: "AddFacultyScholarModal" },
            { formId: "faculty-scholar-form", modalId: "EditFacultyScholarModal" },
            { formId: "view-faculty-scholar-form", modalId: "AddFacultyScholarModal" },
            { formId: "view-faculty-scholar-form", modalId: "EditFacultyScholarModal" },
            
            // Faculty Graduate Studies
            { formId: "faculty-graduate-studies-form", modalId: "AddFacultyGraduateStudiesModal" },
            { formId: "faculty-graduate-studies-form", modalId: "EditFacultyGraduateStudiesModal" },
            { formId: "view-faculty-graduate-studies-form", modalId: "AddFacultyGraduateStudiesModal" },
            { formId: "view-faculty-graduate-studies-form", modalId: "EditFacultyGraduateStudiesModal" },
            
            // Seminar Training
            { formId: "seminar-training-form", modalId: "AddSeminarTrainingModal" },
            { formId: "seminar-training-form", modalId: "EditSeminarTrainingModal" },
            { formId: "view-seminar-training-form", modalId: "AddSeminarTrainingModal" },
            { formId: "view-seminar-training-form", modalId: "EditSeminarTrainingModal" },
            
            // Recognition
            { formId: "recognition-form", modalId: "AddRecognitionModal" },
            { formId: "recognition-form", modalId: "EditRecognitionModal" },
            { formId: "view-recognition-form", modalId: "AddRecognitionModal" },
            { formId: "view-recognition-form", modalId: "EditRecognitionModal" },
            
            // Presentation
            { formId: "presentation-form", modalId: "AddPresentation" },
            { formId: "presentation-form", modalId: "EditPresentation" },
            { formId: "view-presentation-form", modalId: "AddPresentation" },
            { formId: "view-presentation-form", modalId: "EditPresentation" }
        ];

        formModalPairs.forEach(function(pair) {
            const form = document.getElementById(pair.formId);
            const modal = document.getElementById(pair.modalId);

            modal?.addEventListener("hidden.bs.modal", function () {
                form.classList.remove("was-validated");
                form.reset();
            });
        });
    });
</script>
