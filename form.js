document.addEventListener("DOMContentLoaded", () => {

            let currentStep = 0;

            const formSteps = document.querySelectorAll(".step");
            const stepDots = document.querySelectorAll(".stepp");
            const progress = document.querySelector(".stepper-progress");

            const nextBtn = document.getElementById("nextBtn");
            const prevBtn = document.getElementById("prevBtn");
            const subBtn = document.getElementById("subBtn");
            const form = document.getElementById("form");

            const yes = document.getElementById("yes");
            const no = document.getElementById("no");
            const check = document.querySelectorAll(".disa");

            function updatecheckbox() {
                if(no.checked) {
                    check.forEach(x => x.disabled = true);
                    check.forEach(y => y.checked = false);
                } else {
                    check.forEach(x => x.disabled = false);
                }
            }

            yes.addEventListener('change', updatecheckbox);
            no.addEventListener('change', updatecheckbox);

            showStep(currentStep);
            updateStepper();

            function showStep(index) {
                formSteps.forEach((step, i) => {
                    step.classList.toggle("active", i === index);
                });

                prevBtn.style.display = index === 0 ? "none" : "inline-block";
                subBtn.style.display = index === 4 ? "inline-block" : "";
               nextBtn.style.display = index === 4 ? "none" : '';
            }

            function validateStep(index) {
                const inputs = formSteps[index].querySelectorAll("input");

                for (let input of inputs) {
                    if (!input.checkValidity()) {
                        input.reportValidity();
                        alert("Please fill up form.");
                        return false;
                    }
                }
                return true;
            }

            function updateStepper() {
                stepDots.forEach((dot, i) => {
                    dot.classList.remove("active", "completed");
                    if (i < currentStep) dot.classList.add("completed");
                    else if (i === currentStep) dot.classList.add("active");
                });

                const percent = (currentStep / (stepDots.length - 1)) * 100;
                progress.style.width = percent + "%";
            }

            nextBtn.addEventListener("click", () => {
                if (!validateStep(currentStep)) return;
                if (currentStep < formSteps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                    updateStepper();
                } else {
                    form.submit();
                }
            });

            prevBtn.addEventListener("click", () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                    updateStepper();
                }
            });

        });

        const visualImp = document.getElementById("visual-show");

        function visualShow() {
            visualImp.classList.toggle("active");
            // alert("hey")
        }

        const chronicDis = document.getElementById("cDiseaseOption");

        function cDisease() {
            chronicDis.classList.toggle("active");
            // alert("hey")
        }
        
        function No() {
            visualImp.classList.remove("active");
            chronicDis.classList.remove("active");
        }
         
        function IndigenousNo() {
            document.getElementById('yesSpecify').readOnly = "true";
            document.getElementById('yesSpecify').value = "";
        }

        function IndigenousYes() {
            document.getElementById('yesSpecify').removeAttribute("readOnly");
        }
        
        function fourPsNo() {
            document.getElementById('yesSpecify4ps').readOnly = "true";
            document.getElementById('yesSpecify4ps').value = "";
        }

        function fourPsYes() {
            document.getElementById('yesSpecify4ps').removeAttribute("readOnly");
        }

        function yesAdd() {
            const houseNo = document.getElementById("houseNo").value;
            const street = document.getElementById("street").value;
            const brgy = document.getElementById("barangay").value;
            const city = document.getElementById("city").value;
            const province = document.getElementById("province").value;
            const country = document.getElementById("country").value;
            const zipcode = document.getElementById("zipcode").value;

            document.getElementById("houseNoP").value = houseNo;
            document.getElementById("streetP").value = street;
            document.getElementById("barangayP").value = brgy;
            document.getElementById("cityP").value = city;
            document.getElementById("provinceP").value = province;
            document.getElementById("countryP").value = country;
            document.getElementById("zipcodeP").value = zipcode;

            document.getElementById("houseNoP").readOnly = "true";
            document.getElementById("streetP").readOnly = "true";
            document.getElementById("barangayP").readOnly = "true";
            document.getElementById("cityP").readOnly = "true";
            document.getElementById("provinceP").readOnly = "true";
            document.getElementById("countryP").readOnly = "true";
            document.getElementById("zipcodeP").readOnly = "true";

        }
        function noAdd() {
            document.getElementById("houseNoP").value = "";
            document.getElementById("streetP").value = "";
            document.getElementById("barangayP").value = "";
            document.getElementById("cityP").value = "";
            document.getElementById("provinceP").value = "";
            document.getElementById("countryP").value = "";
            document.getElementById("zipcodeP").value = "";

            document.getElementById("houseNoP").removeAttribute("readOnly");
            document.getElementById("streetP").removeAttribute("readOnly");
            document.getElementById("barangayP").removeAttribute("readOnly");
            document.getElementById("cityP").removeAttribute("readOnly");
            document.getElementById("provinceP").removeAttribute("readOnly");
            document.getElementById("countryP").removeAttribute("readOnly");
            document.getElementById("zipcodeP").removeAttribute("readOnly");
        }