package Three.Three;
public class ThirdLaw extends Laws {
    private float action;
    private float reaction;
    private float calculate;

    public ThirdLaw(float action) {
        super("Third Law: Action and Reaction");
        this.action = action;
        this.reaction = -action;
        this.explanation = "For every action, there is an equal and opposite reaction";
    }

    public float getAction() {
        return action;
    }

    public float getReaction() {
        return reaction;
    }

    @Override
    public float calculateLaw() {
        this.calculate = this.reaction; // The reaction is equal in magnitude but opposite
        return this.calculate;
    }
}