function swalLoader() {
    Swal.fire({
          title: "Generating export...",
          text: "Please wait",
        allowOutsideClick: false,
          showConfirmButton: false,
        willOpen: () => {
            Swal.showLoading()
        },
    });
}

function swalError() {
    Swal.fire({
      title: "Error!",
      text: "Please report to administrator!",
      icon: "error",
    });
}

function swalSuccess() {
    Swal.fire({
      title: "Finished!",
      icon: "success",
      timer: 1000,
      showConfirmButton: false,
    });
}