package Three.Three;
public class SecondLaw extends Laws {
    private float force;
    private float mass;
    private float acceleration;
    private float calculate;

    public SecondLaw(float force, float mass, float acceleration) {
        super("Second Law: Force = Mass x Acceleration");
        this.force = force;
        this.mass = mass;
        this.acceleration = acceleration;
        this.explanation = "The acceleration of an object is directly proportional to the net force acting on the object and inversely proportional to its mass.";
    }

    public float getForce() {
        return force;
    }

    public float getMass() {
        return mass;
    }

    public float getAcceleration() {
        return acceleration;
    }

    @Override
    public float calculateLaw() {
        this.calculate = this.getMass() * this.getAcceleration();
        return this.calculate;
    }
}
