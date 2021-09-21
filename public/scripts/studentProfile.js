function updateDataHandler() {
    government = document.getElementById("government-row").innerText;
    birthday = document.getElementById("birthday-row").innerText;
    govs = [
        "Alexandria",
        "Aswan",
        "Asyut",
        "Beheira",
        "Beni Suef",
        "Cairo",
        "Dakahlia",
        "Damietta",
        "Faiyum",
        "Gharbia",
        "Giza",
        "Ismailia",
        "Kafr El Sheikh",
        "Luxor",
        "Matruh",
        "Minya",
        "Monufia",
        "New Valley",
        "North Sinai",
        "Port Said",
        "Qalyubia",
        "Qena",
        "Red Sea",
        "Sharqia",
        "Sohag",
        "South Sinai",
        "Suez",
    ];

    govInput = `<select name="government" class="form-control">`;
    govs.forEach((gov) => {
        if (gov.toLowerCase() !== government.toLowerCase()) {
            govInput += `<option value="${gov}">${gov}</option>`;
        } else {
            govInput += `<option selected value="${gov}">${gov}</option>`;
        }
    });
    govInput += `</select>`;

    document.getElementById("government-row").innerHTML = govInput;
    document.getElementById(
        "birthday-row"
    ).innerHTML = `<input type='date'class='form-control' id='birthday-input' value='${birthday}' name='birthday'/>`;
    document.getElementById(
        "submit-row"
    ).innerHTML = `<input type="submit" class="btn btn-success ml-auto d-block mr-3" value="submit" />`;
}
