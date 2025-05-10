public class Main {
    public static void main(String[] args) {
        System.out.println("<h1>Driving Institute Student Registration</h1>");
        System.out.println("<h2>Registered Student Information:</h2>");

        // Create a license instance
        MotorcycleLicense licenseA = new MotorcycleLicense();

        // Create a student and assign ID and license directly
        Student student1 = new Student(
                "1027855963",
                "Sofia",
                "Rodriguez",
                "Street 1 # 2-3",
                "3001112233",
                "O+",
                licenseA
        );

        System.out.println("Identification: " + student1.getIdentification() + "<br>");
        System.out.println("First Name: " + student1.getFirstName() + "<br>");
        System.out.println("Last Name: " + student1.getLastName() + "<br>");
        System.out.println("Residence Address: " + student1.getResidenceAddress() + "<br>");
        System.out.println("Contact Phone: " + student1.contactPhone + "<br>");
        System.out.println("RH Factor: " + student1.getRhFactor() + "<br>");
        System.out.println("License Type: " + (student1.getSelectedLicense() != null ? student1.getSelectedLicense().getType() : "N/A") + "<br>");
        System.out.println("License Cost: $" + String.format("%,.2f", student1.calculatePaymentValue()) + "<br>");
        System.out.println("License Duration: " + (student1.getSelectedLicense() != null ? student1.getSelectedLicense().getDuration() : "N/A") + " years<br>");
        System.out.println("<p>Payment Value for License: $" + String.format("%,.2f", student1.calculatePaymentValue()) + "</p><hr>");
    }
}