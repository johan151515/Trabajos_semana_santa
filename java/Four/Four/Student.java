public class Student {
    private String identification;
    private String firstName;
    private String lastName;
    private String residenceAddress;
    public String contactPhone;
    private String rhFactor;
    private License selectedLicense;

    public Student(String identification, String firstName, String lastName, String residenceAddress, String contactPhone, String rhFactor, License selectedLicense) {
        this.identification = identification;
        this.firstName = firstName;
        this.lastName = lastName;
        this.residenceAddress = residenceAddress;
        this.contactPhone = contactPhone;
        this.rhFactor = rhFactor;
        this.selectedLicense = selectedLicense;
    }

    public String getIdentification() {
        return identification;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public String getResidenceAddress() {
        return residenceAddress;
    }

    public String getRhFactor() {
        return rhFactor;
    }

    public License getSelectedLicense() {
        return selectedLicense;
    }

    public void setSelectedLicense(License selectedLicense) {
        this.selectedLicense = selectedLicense;
    }

    public double calculatePaymentValue() {
        return (this.selectedLicense != null) ? this.selectedLicense.calculateTotalCost() : 0.0;
    }
}