import express from "express";
import dotenv from "dotenv";
import stripe from "stripe";
import path from "path";

// Load variables
dotenv.config();

// Start Server
const app = express();

app.use(express.static("public"));
app.use(express.json());

// Home Route
app.get("/", (req, res) => {
  res.sendFile(path.resolve("public/index.php"));
});
// Success
app.get("/success", (req, res) => {
  res.sendFile(path.resolve("public/success.php"));
});
// Cancel
app.get("/cancel", (req, res) => {
  res.sendFile(path.resolve("public/cancel.php"));
});
// Stripe
let stripeGateway = stripe(process.env.stripe_api);
let DOMAIN = process.env.DOMAIN;

app.post("/api/stripe-checkout", async (req, res) => {
  const lineItems = req.body.items.map((item) => {
    const unitAmount = parseInt(item.price.replace(/[^0-9.-]+/g, "") * 100);
    console.log("item-price:", item.price);
    console.log("unitAmount:", unitAmount);
    return {
      price_data: {
        currency: "usd",
        product_data: {
          name: item.title,
          images: [item.productImg],
        },
        unit_amount: unitAmount,
      },
      quantity: item.quantity,
    };
  });
  console.log("lineItems:", lineItems);

  // Create Checkout Session
  const session = await stripeGateway.checkout.sessions.create({
    payment_method_types: ["card"],
    mode: "payment",
    success_url: `${DOMAIN}/success`,
    cancel_url: `${DOMAIN}/cancel`,
    line_items: lineItems,
    billing_address_collection: "required",
  });
  res.json({ url: session.url });
});

app.listen(3000, () => {
  console.log("listening on port 3000;");
});
