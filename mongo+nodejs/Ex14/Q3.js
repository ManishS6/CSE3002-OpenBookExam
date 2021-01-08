const MongoClient = require('mongodb').MongoClient;
// const url = "api-key";
MongoClient.connect(url,{useUnifiedTopology:true}, function(err, db) {
  if (err) throw err;
  var dbo = db.db("first");
  var myobj = { name: "SwamiApps Inc", address: "Faridabad" };
  dbo.collection("a").insertOne(myobj, function(err, res) {
    if (err) throw err;
    console.log("1 document inserted");
    db.close();
  });
});