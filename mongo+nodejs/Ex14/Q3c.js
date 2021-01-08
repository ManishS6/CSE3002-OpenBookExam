const MongoClient = require('mongodb').MongoClient;
// const url = "api-key";
MongoClient.connect(url,{useUnifiedTopology:true}, function(err, db) {
  if (err) throw err;
  var dbo=db.db("first");
  var myquery= {address: "Highway 37"};
  var newvalues = {$set: {name:"Google Inc", address:"Somewhere in america"}};
  dbo.collection("a").updateOne(myquery,newvalues, function(err, res)
  {
    if (err) throw err;
    console.log("1 document has been updated");
    db.close();
  });
});