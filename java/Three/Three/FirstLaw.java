package Three.Three;
public class FirstLaw extends Laws {
    private float force;
    private float calculate;

    public FirstLaw(float force) {
        super("First Law: Inertia");
        this.force = force;
        this.explanation = "an object will remain at rest or in uniform rectilinear motion unless acted upon by an external force";
    }

    public float getForce() {
        return force;
    }

    @Override
    public float calculateLaw() {
        this.calculate = this.getForce();
        return this.calculate;
    }
}